<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Visual Identity Design for "Latoga" Fashion Brand',
                'description' => 'COMPACT developed a complete visual identity for Latoga, a fashion brand, to create a modern, consistent, and recognizable brand presence. The project covered logo development, color and typography systems, visual elements, and brand applications across digital and marketing touchpoints.',
                'full_description' => 'COMPACT developed a complete visual identity for Latoga, a fashion brand, to create a modern, consistent, and recognizable brand presence. The project covered logo development, color and typography systems, visual elements, and brand applications across digital and marketing touchpoints.',
                'category' => 'Visual Identity Design',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767369371739-yfw62o.jpg',
                'gallery' => [],
                'client_name' => 'Latoga Fashion Brand',
                'project_date' => '2024-01-15',
                'project_url' => null,
                'order' => 1,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => 'Visual Identity Design for Latoga Fashion Brand',
                'meta_description' => 'Complete visual identity design for Latoga fashion brand including logo, color system, and brand applications.',
            ],
            [
                'title' => 'Digital Marketing for Matrix (Masfoofat Al-Taqnia)',
                'description' => 'COMPACT delivered integrated digital marketing for Matrix (Masfoofat Al-Taqnia) to increase brand visibility, generate qualified leads, and improve performance through content strategy, paid campaigns, and analytics-driven optimization.',
                'full_description' => 'COMPACT delivered integrated digital marketing for Matrix (Masfoofat Al-Taqnia) to increase brand visibility, generate qualified leads, and improve performance through content strategy, paid campaigns, and analytics-driven optimization.',
                'category' => 'Digital Marketing',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767369194317-uge4kq.png',
                'gallery' => [],
                'client_name' => 'Matrix (Masfoofat Al-Taqnia)',
                'project_date' => '2024-02-20',
                'project_url' => null,
                'order' => 2,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => 'Digital Marketing for Matrix',
                'meta_description' => 'Integrated digital marketing services for Matrix to increase brand visibility and generate leads.',
            ],
            [
                'title' => 'Website Development for Rento Co for vehicles rental service',
                'description' => 'Rento Car Rental Website – UI/UX Design & Development (Moken)

Rento by Moken: Car Rental Website Development',
                'full_description' => 'Rento Car Rental Website – UI/UX Design & Development (Moken). Complete website development for Rento Co, a vehicle rental service, including responsive design, booking system, and payment integration.',
                'category' => 'Web Development',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767369631707-8gr9oq.webp',
                'gallery' => [],
                'client_name' => 'Rento Co',
                'project_date' => '2024-03-10',
                'project_url' => null,
                'order' => 3,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => 'Website Development for Rento Car Rental',
                'meta_description' => 'Complete website development for Rento Co vehicle rental service with booking system.',
            ],
            [
                'title' => 'Digital Marketing Management for yallagoom website',
                'description' => 'Digital Marketing Management for yallagoom website',
                'full_description' => 'Digital Marketing Management for yallagoom website including social media management, content marketing, SEO optimization, and paid advertising campaigns.',
                'category' => 'Digital Marketing',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767368479210-m929sc.png',
                'gallery' => [],
                'client_name' => 'Yallagoom',
                'project_date' => '2024-04-05',
                'project_url' => null,
                'order' => 4,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => 'Digital Marketing Management for Yallagoom',
                'meta_description' => 'Complete digital marketing management services for Yallagoom website.',
            ],
        ];
        Project::truncate();
        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
