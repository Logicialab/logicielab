<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        return view('components.pages.all-projects',[
            'projects' => Project::orderBy('order', 'asc')->get()
        ]);
    }

    public function show()
    {
        return view('frontend.project-details');
    }

    public function create()
    {
        return view('frontend.project.create');
    }

    public function store(Request $request)
    {
        $project = Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'order' => $request->order,
            'content' => $request->description,
        ]);

        
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $project->addMedia($file)->toMediaCollection();
            }
        }

        //$project->addMediaFromRequest('image')->toMediaCollection();
    }
}
