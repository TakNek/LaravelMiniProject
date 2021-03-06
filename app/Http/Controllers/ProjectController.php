<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function index()
    {
        $projects = Project::all();
        return view('projects.project',compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required','min:3'],
            'description' => ['required','min:3']
        ]);

        Project::create(request(['title','description']));

        return redirect('/projects');

    }

    public function edit(Project $project)
    {
        
        return view('projects.edit',compact('project'));
    }

    public function update(Project $project)
    {

        $project->update(request(['title','description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        
        $project->delete();
        return redirect('/projects');
    }

    public function show(Project $project)
    {
        
        return view('projects.show',compact('project'));
    }
}
