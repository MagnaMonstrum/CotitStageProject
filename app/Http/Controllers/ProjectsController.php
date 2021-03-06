<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Filesystem\Filesystem;


class ProjectsController extends Controller
{
    public function __construct()
    {

    $this->middleware('auth');

    }
    public function index()
    {

        $projects = Project::where('owner_id', auth()->id())->get();


        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {

        abort_if($project->owner_id !== auth()->id(), 403);
        
//        $this->authorize('update', $project);

//        abort_if(\Gate::denies('update', $project),403);

        return view('projects.show', compact('project'));

    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $attributes = request()->validate([

            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']

        ]);

        $attributes['owner_id'] = auth()->id();

        Project::create($attributes);


        return redirect('/projects');


    }

    public function edit(Project $project)
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



        $project->delete();

        if ($project->trashed()) {

         return redirect('/projects');

        }



    }
}
