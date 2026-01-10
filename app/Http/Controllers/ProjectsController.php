<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display the projects listing page.
     */
    public function index()
    {
        return view('projects');
    }

    /**
     * Display a single project.
     */
    public function show(string $id)
    {
        // TODO: Implement single project view
        return view('projects.show', compact('id'));
    }
}
