<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MainController extends Controller
{
   
    public function home() {

        $projects = Project :: all();

        return view('pages.home', compact('projects'));
    }

    public function private() {
        
        return view  ('pages.private');
    }

    public function show(Project $project) {
        
        return view('pages.project.show', compact('project'));
    }

    public function  create() {
        
        return view('pages.project.create');
    }

    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required|string|max:64|unique:projects,name',
            'description' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'release_date' => 'required|before:'.now(),
            'repo_link' => 'required|unique:projects,repo_link'
        ]);

        $project = Project::create($data);

        return redirect() -> route('pages.project.show', $project);
    }

    public function delete(Project $project) {
        
        $project -> delete();

        return redirect() -> route('home', $project);
    }


    public function update(Request $request) {

        $data = $request->validate([
            'name' => 'required|string|max:64|unique:projects,name',
            'description' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'release_date' => 'required|before:'.now(),
            'repo_link' => 'required|unique:projects,repo_link'
        ]);

        $project = Project::create($data);

        return redirect() -> route('pages.project.show', $project);
    }
}
