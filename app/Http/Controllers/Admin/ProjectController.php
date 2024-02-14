<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Rule;
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
        dd($projects);
        return view('admin.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:4', 'max:40', Rule::unique('pokemons')],
            'thumb' => ['required', 'min:4', 'url:http,https'],
            'description' => ['required', 'integer', 'min:1', 'max:10'],
            'no' => ['required', 'digits_between:1,4'],
            'type' => ['required', 'digits_between:1,4'],
            'weakness' => ['required', 'min:10', 'max:3000'],
        ], [
            'name.required' => 'Ci deve essere una immagine, altrimenti come capiamo che bel pokemon è?'
        ]);

        $formData = $request->all();

        $newProject = new Project();
        $newProject->name = $formData['name'];
        $newProject->thumb = $formData['thumb'];
        $newProject->description = $formData['description'];
        $newProject->no = $formData['no'];
        $newProject->type = $formData['type'];
        $newProject->weakness = $formData['weakness'];
        $newProject->strength = $formData['strength'];
        $newProject->save();

        return redirect()->route('admin.projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.prijects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

       

        $project->name = $data['title'];
        $project->thumb = $data['thumb'];
        $project->description = $data['description'];
        $project->no = $data['no'];
        $project->type = $data['type'];
        $project->weakness = $data['weakness'];
        $project->strength = $data['strength'];
        $project->save();

        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
