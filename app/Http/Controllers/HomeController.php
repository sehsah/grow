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
            ->limit(4)
            ->get();

        // Fetch working processes
        $workingProcesses = WorkingProcess::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        // Fetch target fields
        $targetFields = TargetField::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        // Fetch settings for home page
        $settings = [
            'hero_title' => Setting::getValue('home.hero_title', 'Business Excellence Solutions'),
            'hero_subtitle' => Setting::getValue('home.hero_subtitle', 'YOU CAN GROW WITH'),
            'hero_description' => Setting::getValue('home.hero_description', 'We provide integrated business solutions that drive growth and innovation for organizations across the Middle East.'),
            'hero_image' => Setting::getValue('home.hero_image', '/assets/hero-image-U-fWZ3Pk.jpg'),
            'services_title' => Setting::getValue('home.services_title', 'Our Services'),
            'services_subtitle' => Setting::getValue('home.services_subtitle', 'Comprehensive business solutions tailored to your needs'),
            'services_description' => Setting::getValue('home.services_description', 'We offer comprehensive solutions tailored to your unique business needs, driving growth and digital transformation.'),
            'strengths_title' => Setting::getValue('home.strengths_title', 'Our Strengths'),
            'strengths_subtitle' => Setting::getValue('home.strengths_subtitle', '& Competitive Advantages'),
            'mission_title' => Setting::getValue('home.mission_title', 'Our Mission'),
            'mission_text' => Setting::getValue('home.mission_text', 'To empower businesses to achieve their full potential through innovative solutions and exceptional services that drive growth and success.'),
            'vision_title' => Setting::getValue('home.vision_title', 'Our Vision'),
            'vision_text' => Setting::getValue('home.vision_text', 'To be the leading trusted partner for digital transformation and organizational development in the Arab region.'),
            'projects_title' => Setting::getValue('home.projects_title', 'Creative Projects'),
            'projects_subtitle' => Setting::getValue('home.projects_subtitle', 'We\'ve Delivered To Clients'),
            'years_experience' => Setting::getValue('stats.years_experience', '10+'),
            'team_members' => Setting::getValue('stats.team_members', '100+'),
        ];

        return view('home', compact('services', 'projects', 'partners', 'teams', 'workingProcesses', 'targetFields', 'settings'));
    }
}
