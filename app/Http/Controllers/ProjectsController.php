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
        $project->update(request(['title', 'description']));

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
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
        ]);

        Project::create(request(['title', 'description']));

        return redirect('/projects');

        /* --- De tweede versie:
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);
        */

        /* --- De eerste code: ---
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();
        */
    }
}
