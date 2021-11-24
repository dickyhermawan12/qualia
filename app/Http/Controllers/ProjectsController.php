<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Projects;

class ProjectsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $projects = Projects::all();

        return Inertia::render('Projects/Show', [
            'projects' => $projects
        ]);
    }

    public function create()
    {
        return Inertia::render('Projects/Create');
    }

    public function createSubmit(Request $request)
    {
        $projects = Projects::create($request->all());
        return redirect()->route('projects.index');
    }

    public function details(Request $request, $name)
    {
        $project = Projects::where('name', $name)->first();

        return Inertia::render('Projects/Details', [
            'projectName' => $project->name
        ]);
    }
}
