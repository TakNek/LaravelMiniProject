<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Go to the store',
            'Go to the market',
            'Go to work lol',
            'Go Fuck Yourself'
        ];
        return view('welcome',compact('tasks'));
    }

    public function about()
    {
        return view('about');
    }

    
    public function contact()
    {
        return view('contact');
    }

    public function project()
    {
        $projects = Project::all();
        return view('project',compact('projects'));
    }
}
