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

class LiveSessionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create(Request $request, $name)
    {
        $project = Project::where('name', $name)->first();

        return Inertia::render('Livesessions/Create', [
            'project' => $project
        ]);
    }

    public function createSubmit(Request $request, $name)
    {
        $project = Project::where('name', $name)->first();
        $livesession = LiveSession::create(
            array_merge(['id_project' => $project->id], $request->all())
        );

        $request->session()->flash('flash.banner', 'Live session successfully created!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('projects.details', [ 'name' => strtolower($name) ]);
    }

    public function edit(Request $request, $name, $id)
    {
        $project = Project::where('name', $name)->first();
        $livesession = LiveSession::where('id', $id)->first();

        return Inertia::render('Livesessions/Edit', [
            'project' => $project,
            'livesession' => $livesession
        ]);
    }

    public function editSubmit(Request $request, $name, $id)
    {
        $project = Project::where('name', $name)->first();
        $livesession = LiveSession::where('id', $id)
            ->first()
            ->update(array_merge(['id_project' => $project->id], $request->all()));

        $request->session()->flash('flash.banner', 'Live session successfully edited!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('projects.details', [ 'name' => strtolower($name) ]);
    }

    public function deleteSubmit(Request $request, $name, $id)
    {
        $deletedLivesession = LiveSession::where('id', $id)->delete();

        $request->session()->flash('flash.banner', 'Project successfully deleted!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('projects.details', [ 'name' => strtolower($name) ]);
    }
}
