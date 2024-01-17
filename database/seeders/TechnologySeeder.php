<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $technologies = ['HTML', 'CSS', 'Bootstrap', 'SASS', 'JavaScript', 'Vue.js', 'PHP8', 'SQL', 'Laravel'];
        foreach ($technologies as $technology) {
            $new_technology = new Technology;
            $new_technology->name = $technology;
            $new_technology->slug = Str::slug($technology, '-');
            $new_technology->save();
        }
    }
}
