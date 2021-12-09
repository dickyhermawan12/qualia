<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Project;
use App\Models\LiveSession;

class ProjectController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        $projects = Project::where('id_team', $request->user()->currentTeam->id)->get();

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
        $projects = Project::create(
            array_merge(['id_team' => $request->user()->currentTeam->id], $request->all()
        ));

        $request->session()->flash('flash.banner', 'Project successfully created!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('projects.index');
    }

    public function details(Request $request, $name)
    {
        $project = Project::where('name', $name)->first();
        $liveSessions = LiveSession::where('id_project', $project->id)->get();

        return Inertia::render('Projects/Details', [
            'project' => $project,
            'liveSessions' => $liveSessions
        ]);
    }

    public function edit(Request $request, $name)
    {
        $project = Project::where('name', $name)->first();

        return Inertia::render('Projects/Edit', [
            'project' => $project
        ]);
    }

    public function editSubmit(Request $request, $name)
    {
        $project = Project::where('name', $name)
                    ->first()
                    ->update($request->all());

        return redirect()->route('projects.details', strtolower($request->name));
    }

    public function deleteSubmit(Request $request, $name)
    {
        $deletedProject = Project::where('name', $name)->delete();

        $request->session()->flash('flash.banner', 'Project successfully deleted!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('projects.index');
    }
}
