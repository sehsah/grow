<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Statistics
            [
                'key' => 'stats.clients_count',
                'value' => '150+',
                'type' => 'text',
                'group' => 'stats',
                'description' => 'Number of clients (displayed on about page)',
            ],
            [
                'key' => 'stats.projects_count',
                'value' => '200+',
                'type' => 'text',
                'group' => 'stats',
                'description' => 'Number of projects completed (displayed on about page)',
            ],
            [
                'key' => 'stats.experts_count',
                'value' => '50+',
                'type' => 'text',
                'group' => 'stats',
                'description' => 'Number of experts in the team (displayed on about page)',
            ],
            [
                'key' => 'stats.years_experience',
                'value' => '10+',
                'type' => 'text',
                'group' => 'stats',
                'description' => 'Years of experience (displayed on about and home page)',
            ],
            [
                'key' => 'stats.team_members',
                'value' => '100+',
                'type' => 'text',
                'group' => 'stats',
                'description' => 'Number of team members (displayed on home page)',
            ],

            // Home Page Content
            [
                'key' => 'home.hero_title',
                'value' => 'Business Excellence Solutions',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Main hero title on homepage',
            ],
            [
                'key' => 'home.hero_subtitle',
                'value' => 'YOU CAN GROW WITH',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Hero subtitle on homepage',
            ],
            [
                'key' => 'home.hero_description',
                'value' => 'We provide integrated business solutions that drive growth and innovation for organizations across the Middle East.',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Hero description on homepage',
            ],
            [
                'key' => 'home.hero_image',
                'value' => '/assets/hero-image-U-fWZ3Pk.jpg',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Hero image path on homepage',
            ],
            [
                'key' => 'home.services_title',
                'value' => 'Our Services',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Services section title on homepage',
            ],
            [
                'key' => 'home.services_subtitle',
                'value' => 'Comprehensive business solutions tailored to your needs',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Services section subtitle on homepage',
            ],
            [
                'key' => 'home.services_description',
                'value' => 'We offer comprehensive solutions tailored to your unique business needs, driving growth and digital transformation.',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Services section description on homepage',
            ],
            [
                'key' => 'home.strengths_title',
                'value' => 'Our Strengths',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Strengths section title on homepage',
            ],
            [
                'key' => 'home.strengths_subtitle',
                'value' => '& Competitive Advantages',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Strengths section subtitle on homepage',
            ],
            [
                'key' => 'home.mission_title',
                'value' => 'Our Mission',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Mission title on homepage',
            ],
            [
                'key' => 'home.mission_text',
                'value' => 'To empower businesses to achieve their full potential through innovative solutions and exceptional services that drive growth and success.',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Mission text on homepage',
            ],
            [
                'key' => 'home.vision_title',
                'value' => 'Our Vision',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Vision title on homepage',
            ],
            [
                'key' => 'home.vision_text',
                'value' => 'To be the leading trusted partner for digital transformation and organizational development in the Arab region.',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Vision text on homepage',
            ],
            [
                'key' => 'home.projects_title',
                'value' => 'Creative Projects',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Projects section title on homepage',
            ],
            [
                'key' => 'home.projects_subtitle',
                'value' => 'We\'ve Delivered To Clients',
                'type' => 'text',
                'group' => 'home',
                'description' => 'Projects section subtitle on homepage',
            ],

            // About Page Content
            [
                'key' => 'about.intro_text',
                'value' => 'COMPACT delivers integrated business solutions across: Organizational Development, Business Development, CRM Solutions, Digital Transformation & Automation, Dashboards & Reporting, System Integration, Websites & Mobile Apps, and 360° Digital Marketing—plus Governance Solutions, Recruitment & Training, Financial Consulting, and Legal Consulting',
                'type' => 'text',
                'group' => 'about',
                'description' => 'Introductory text on about page',
            ],
            [
                'key' => 'about.description_text',
                'value' => 'Backed by over a decade of experience, we help organizations achieve measurable goals and transform operations for sustainable growth.',
                'type' => 'text',
                'group' => 'about',
                'description' => 'Description text on about page',
            ],
            [
                'key' => 'about.team_expertise',
                'value' => 'Our team blends deep industry expertise with innovative, results-driven approaches on every project.',
                'type' => 'text',
                'group' => 'about',
                'description' => 'Team expertise text on about page',
            ],
            [
                'key' => 'about.mission_text',
                'value' => 'To empower organizations with innovative, data-driven solutions that accelerate sustainable growth and strengthen operational excellence',
                'type' => 'text',
                'group' => 'about',
                'description' => 'Mission text on about page',
            ],
            [
                'key' => 'about.vision_text',
                'value' => 'To be the Middle East\'s most trusted business consulting partner, delivering transformative solutions and consistently exceptional results.',
                'type' => 'text',
                'group' => 'about',
                'description' => 'Vision text on about page',
            ],
            [
                'key' => 'about.values_text',
                'value' => 'We are guided by integrity, innovation, collaboration, and a commitment to excellence in everything we do.',
                'type' => 'text',
                'group' => 'about',
                'description' => 'Values description on about page',
            ],
            [
                'key' => 'about.testimonial_text',
                'value' => 'COMPACT completely transformed our business with their innovative solutions! Their exceptional expertise went beyond expectations, creating a visually stunning and user-friendly experience. The team\'s attention to detail and commitment is unmatched!',
                'type' => 'text',
                'group' => 'about',
                'description' => 'Testimonial text on about page',
            ],
            [
                'key' => 'about.testimonial_author',
                'value' => 'Ahmed Hassan',
                'type' => 'text',
                'group' => 'about',
                'description' => 'Testimonial author name',
            ],
            [
                'key' => 'about.testimonial_author_position',
                'value' => 'CEO & Founder',
                'type' => 'text',
                'group' => 'about',
                'description' => 'Testimonial author position',
            ],
            [
                'key' => 'about.team_image',
                'value' => '/assets/team-marketer-DnNglUX8.jpg',
                'type' => 'text',
                'group' => 'about',
                'description' => 'Team image path on about page',
            ],

            // Blog Page Content
            [
                'key' => 'blog.page_title',
                'value' => 'Insights & Articles',
                'type' => 'text',
                'group' => 'blog',
                'description' => 'Blog page main title',
            ],
            [
                'key' => 'blog.page_subtitle',
                'value' => 'Discover the latest trends and insights in technology and business from our experts',
                'type' => 'text',
                'group' => 'blog',
                'description' => 'Blog page subtitle/description',
            ],
            [
                'key' => 'blog.newsletter_title',
                'value' => 'Subscribe to Our Newsletter',
                'type' => 'text',
                'group' => 'blog',
                'description' => 'Newsletter section title on blog page',
            ],
            [
                'key' => 'blog.newsletter_description',
                'value' => 'Get the latest articles and insights delivered directly to your inbox',
                'type' => 'text',
                'group' => 'blog',
                'description' => 'Newsletter section description on blog page',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
