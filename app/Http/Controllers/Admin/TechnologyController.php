<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;


class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::all();

        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Technology::create($data);

        return redirect()->route('admin.technologies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology, Project $project)
    {

        $technologyName = $technology->technology_name;
        $projects = Project::all();
        /* dd($projects['0']->technologies->pluck('technology_name')); */


        return view('admin.technologies.show', compact('projects', 'technologyName'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /* public function Prova(){
        if (in_array($technologyName, $project->technologies->pluck('technology_name'))) {
            return echo'ciao'
          }
    } */
}
