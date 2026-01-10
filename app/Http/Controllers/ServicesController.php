<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display the services listing page.
     */
    public function index()
    {
        return view('services');
    }

    /**
     * Display a specific service page.
     */
    public function show(string $slug)
    {
        // TODO: Implement individual service view
        // Example: /services/organizational-development
        return view('services.show', compact('slug'));
    }
}
