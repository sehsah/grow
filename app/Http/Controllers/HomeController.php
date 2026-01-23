<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Partner;
use App\Models\Team;
use App\Models\WorkingProcess;
use App\Models\TargetField;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        // Fetch services (limit to 4 active)
        $services = Service::where('is_active', true)
            ->orderBy('order', 'asc')
            ->limit(4)
            ->get();

        // Fetch projects (limit to 4 active)
        $projects = Project::where('is_active', true)
            ->orderBy('order', 'asc')
            ->limit(4)
            ->get();

        // Fetch partners
        $partners = Partner::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        // Fetch team members
        $teams = Team::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        // Fetch working processes
        $workingProcesses = WorkingProcess::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        // Fetch target fields
        $targetFields = TargetField::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        $coreValues = Setting::getValue('home.core_values', []);
        $competitiveAdvantages = Setting::getValue('home.competitive_advantages', []);

        return view('home', compact('coreValues', 'competitiveAdvantages', 'services', 'projects', 'partners', 'teams', 'workingProcesses', 'targetFields'));
    }
}
