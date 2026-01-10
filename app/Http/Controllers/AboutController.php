<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Team;
use App\Models\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page.
     */
    public function index()
    {
        // Fetch partners
        $partners = Partner::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        // Fetch team members
        $teams = Team::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        // Fetch settings for about page
        $settings = [
            'intro_text' => Setting::getValue('about.intro_text', 'COMPACT delivers integrated business solutions across: Organizational Development, Business Development, CRM Solutions, Digital Transformation & Automation, Dashboards & Reporting, System Integration, Websites & Mobile Apps, and 360° Digital Marketing—plus Governance Solutions, Recruitment & Training, Financial Consulting, and Legal Consulting'),
            'description_text' => Setting::getValue('about.description_text', 'Backed by over a decade of experience, we help organizations achieve measurable goals and transform operations for sustainable growth.'),
            'team_expertise' => Setting::getValue('about.team_expertise', 'Our team blends deep industry expertise with innovative, results-driven approaches on every project.'),
            'mission_text' => Setting::getValue('about.mission_text', 'To empower organizations with innovative, data-driven solutions that accelerate sustainable growth and strengthen operational excellence'),
            'vision_text' => Setting::getValue('about.vision_text', 'To be the Middle East\'s most trusted business consulting partner, delivering transformative solutions and consistently exceptional results.'),
            'values_text' => Setting::getValue('about.values_text', 'We are guided by integrity, innovation, collaboration, and a commitment to excellence in everything we do.'),
            'testimonial_text' => Setting::getValue('about.testimonial_text', 'COMPACT completely transformed our business with their innovative solutions! Their exceptional expertise went beyond expectations, creating a visually stunning and user-friendly experience. The team\'s attention to detail and commitment is unmatched!'),
            'testimonial_author' => Setting::getValue('about.testimonial_author', 'Ahmed Hassan'),
            'testimonial_author_position' => Setting::getValue('about.testimonial_author_position', 'CEO & Founder'),
            'team_image' => Setting::getValue('about.team_image', '/assets/team-marketer-DnNglUX8.jpg'),
            'clients_count' => Setting::getValue('stats.clients_count', '150+'),
            'projects_count' => Setting::getValue('stats.projects_count', '200+'),
            'experts_count' => Setting::getValue('stats.experts_count', '50+'),
            'years_experience' => Setting::getValue('stats.years_experience', '10+'),
        ];

        return view('about', compact('partners', 'teams', 'settings'));
    }
}
