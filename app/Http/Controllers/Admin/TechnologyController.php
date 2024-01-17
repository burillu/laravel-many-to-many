<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTechnologyRequest;
use App\Http\Requests\UpdateTechnologyRequest;
use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTechnologyRequest $request)
    {
        //
        $form_data = $request->validated();
        $form_data['slug'] = Str::slug($form_data['name'], '-');
        $technology = Technology::create($form_data);
        return to_route('admin.technologies.show', compact('technology'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        //
        return view('admin.technologies.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        //
        return view('admin.technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTechnologyRequest $request, Technology $technology)
    {
        //
        $form_data = $request->validated();
        if ($technology->name != $form_data['name']) {
            $form_data['slug'] = Str::slug($form_data['name']);
        }
        $technology->update($form_data);
        return to_route('admin.technologies.show', compact('technology'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        //
        $technology->delete();
        return to_route('admin.technologies.index')->with('message', "The technology : $technology->name, has been removed");
    }
}
