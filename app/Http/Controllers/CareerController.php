<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display the career/jobs listing page.
     */
    public function index()
    {
        return view('career');
    }

    /**
     * Display a specific job posting.
     */
    public function show(string $id)
    {
        // TODO: Implement individual job posting view
        return view('career.show', compact('id'));
    }
}
