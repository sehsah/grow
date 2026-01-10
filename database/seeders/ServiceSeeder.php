<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Organizational Development',
                'slug' => 'organizational-development',
                'short_description' => 'Transform your organization with strategic planning and process optimization.',
                'description' => 'Transform your organization with strategic planning and process optimization. We help businesses restructure their operations, improve efficiency, and achieve sustainable growth through proven organizational development methodologies.',
                'category' => 'Business Consulting',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-8 h-8 text-primary"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>',
                'image' => 'assets/team-developer-VEpenOtO.jpg',
                'order' => 1,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => 'Organizational Development Services | Business Consulting',
                'meta_description' => 'Transform your organization with strategic planning and process optimization. Expert business consulting services.',
            ],
            [
                'title' => 'CRM Solutions',
                'slug' => 'crm',
                'short_description' => 'Implement and optimize customer relationship management systems.',
                'description' => 'Implement and optimize customer relationship management systems. Our CRM solutions help businesses manage customer interactions, improve sales processes, and enhance customer satisfaction through data-driven insights and automation.',
                'category' => 'Sales',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                'image' => 'assets/team-developer-VEpenOtO.jpg',
                'order' => 2,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => 'CRM Solutions | Customer Relationship Management',
                'meta_description' => 'Implement and optimize customer relationship management systems for better sales and customer satisfaction.',
            ],
            [
                'title' => 'Outsourcing Services',
                'slug' => 'outsourcing',
                'short_description' => 'Access skilled professionals and resources to support your operations.',
                'description' => 'Access skilled professionals and resources to support your operations. Our outsourcing services provide businesses with access to expert talent and resources, allowing you to focus on core business activities while we handle specialized tasks efficiently.',
                'category' => 'Talent Acquisition',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cog w-8 h-8 text-primary"><path d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z"></path><path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path><path d="M12 2v2"></path><path d="M12 22v-2"></path><path d="m17 20.66-1-1.73"></path><path d="M11 10.27 7 3.34"></path><path d="m20.66 17-1.73-1"></path><path d="m3.34 7 1.73 1"></path><path d="M14 12h8"></path><path d="M2 12h2"></path><path d="m20.66 7-1.73 1"></path><path d="m3.34 17 1.73-1"></path><path d="m17 3.34-1 1.73"></path><path d="m11 13.73-4 6.93"></path></svg>',
                'image' => 'assets/team-developer-VEpenOtO.jpg',
                'order' => 3,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => 'Outsourcing Services | Talent Acquisition',
                'meta_description' => 'Access skilled professionals and resources to support your operations through our outsourcing services.',
            ],
            [
                'title' => 'IT Development',
                'slug' => 'it-development',
                'short_description' => 'Custom software development and digital transformation solutions.',
                'description' => 'Custom software development and digital transformation solutions. We provide end-to-end IT development services including web applications, mobile apps, system integration, and digital transformation solutions tailored to your business needs.',
                'category' => 'Web Development',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor w-8 h-8 text-primary"><rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>',
                'image' => 'assets/team-developer-VEpenOtO.jpg',
                'order' => 4,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => 'IT Development Services | Custom Software Development',
                'meta_description' => 'Custom software development and digital transformation solutions for your business.',
            ],
        ];
        Service::truncate();
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
