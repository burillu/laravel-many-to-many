<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = config("db.projects");
        foreach ($projects as $project) {
            $new_project = new Project();
            $new_project->title = $project["title"];
            $new_project->user_id = 1;
            $new_project->slug = Str::slug($project["title"], '-');
            $new_project->image = $project["image"];
            $new_project->body = $project["body"];

            $new_project->save();

        }

    }
    public static function createImage($image, $name)
    {
        $url = $image;
        $file_content = file_get_contents($url);
        $name = Str::slug($name, '-') . 'jpg';
        $path = 'images' . $name;
        Storage::put('images/' . $name, $file_content);
        return $path;

    }
}
