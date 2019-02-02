<?php

namespace App\Http\Controllers;
use App\Project;

// use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index' , compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project) // example.com/projects/1/edit
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        //dd('delete ' . $id);
        //Project::findOrFail($id)->delete();
        $project->delete();

        return redirect('/projects');
    }

    public function store()
    {
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);


        // $project = new Project();

        // $project->title = request('title');
        // $project->description = request('description');

        // $project->save();

        // return redirect('/projects');
    }
}
