<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use App\Models\Project;


class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /* $projectsIDS = Project::all()->pluck('id'); */
        $projects = Project::all();
        $technologisIDS = Technology::all()->pluck('id');

        foreach ($projects as $project) {
            $project->technologies()->sync([1, 2]);
        }
    }
}