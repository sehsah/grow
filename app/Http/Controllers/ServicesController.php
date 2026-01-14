<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display the services listing page.
     */
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        return view('services', compact('services'));
    }

    /**
     * Display a specific service page.
     */
    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('service-single', compact('service'));
    }
}
