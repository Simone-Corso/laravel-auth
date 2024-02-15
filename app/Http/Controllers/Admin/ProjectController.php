<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('admin.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $data = $request->validate([
            'title' => ['required', 'min:4', 'max:40', Rule::unique('projects')],
            'thumb' => ['required', 'min:4', 'url:http,https'],
            'description' => ['required', 'string', 'min:1', 'max:10'],
        ], [
            'name.required' => 'Ci deve essere una immagine'
        ]);

        $formData = $request->all();
        dd($request->all());
        $newProject = new Project();
        $newProject->name = $formData['name'];
        $newProject->thumb = $formData['thumb'];
        $newProject->description = $formData['description'];
        $newProject->save();

        return redirect()->route('admin.projects.show', $newProject->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        
       

        $project->title = $data['title'];
        $project->thumb = $data['thumb'];
        $project->description = $data['description'];
        $project->save();

        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        $project->delete();
    return redirect()->route('admin.projects.index');
    }
}
