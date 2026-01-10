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
                'icon' => 'lucide-building2',
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
                'icon' => 'lucide-users',
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
                'icon' => 'lucide-cog',
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
                'icon' => 'lucide-monitor',
                'image' => 'assets/team-developer-VEpenOtO.jpg',
                'order' => 4,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => 'IT Development Services | Custom Software Development',
                'meta_description' => 'Custom software development and digital transformation solutions for your business.',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
