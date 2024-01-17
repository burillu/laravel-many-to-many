<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $types = Type::all();
        $technologies = Technology::all();
        return view("admin.projects.create", compact('types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
        $form_data = $request->validated();
        $form_data['user_id'] = auth()->id();
        $form_data['slug'] = Str::slug($form_data['title'], "-");
        if ($request->hasFile('image')) {
            $path = Storage::put('images', $request->image);
            $form_data['image'] = $path;
        }
        $project = Project::create($form_data);
        if ($request->has('technologies')) {
            $project->technologies()->attach($request->technologies);
        }

        return to_route("admin.projects.show", $project->slug);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        $types = Type::all();
        $technologies = Technology::all();
        return view("admin.projects.edit", compact("project", "types", "technologies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
        $form_data = $request->validated();
        $form_data["user_id"] = auth()->id();
        $form_data["slug"] = Str::slug($form_data["title"], "-");
        if ($request->hasFile('image')) {
            $path = Storage::put('images', $request->image);
            $form_data['image'] = $path;
        }
        $project->update($form_data);
        if ($request->has('technologies')) {
            $project->technologies()->sync($request->technologies);
        }
        return to_route("admin.projects.show", $project->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {   //toglie tutti i dati collegati
        $project->technologies()->detach();
        //se il progetto contiene un immagine, alla cancellazione bisogna procedere anche alla cancellazione della stessa
        if ($project->image) {
            Storage::delete($project->image);
        }
        $project->delete();

        return to_route("admin.projects.index")->with('message', "The Project title : $project->title has been removed");
    }
}
