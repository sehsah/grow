<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display the projects listing page.
     */
    public function index()
    {
        $projects = Project::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        return view('projects', compact('projects'));
    }

    /**
     * Display a single project.
     */
    public function show(string $id)
    {
        $project = Project::where('id', $id)
            ->where('is_active', true)
            ->firstOrFail();

        return view('project-show', compact('project'));
    }
}
