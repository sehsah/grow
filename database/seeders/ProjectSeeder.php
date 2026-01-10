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
                'title' => [
                    'en' => 'Visual Identity Design for "Latoga" Fashion Brand',
                    'ar' => 'تصميم الهوية البصرية لعلامة "Latoga" للموضة',
                ],
                'description' => [
                    'en' => 'COMPACT developed a complete visual identity for Latoga, a fashion brand, to create a modern, consistent, and recognizable brand presence. The project covered logo development, color and typography systems, visual elements, and brand applications across digital and marketing touchpoints.',
                    'ar' => 'طورت COMPACT هوية بصرية كاملة لـ Latoga، علامة موضة، لإنشاء حضور علامة تجارية حديث ومتسق ومعروف. شمل المشروع تطوير الشعار وأنظمة الألوان والطباعة والعناصر البصرية وتطبيقات العلامة التجارية عبر نقاط الاتصال الرقمية والتسويقية.',
                ],
                'full_description' => [
                    'en' => 'COMPACT developed a complete visual identity for Latoga, a fashion brand, to create a modern, consistent, and recognizable brand presence. The project covered logo development, color and typography systems, visual elements, and brand applications across digital and marketing touchpoints.',
                    'ar' => 'طورت COMPACT هوية بصرية كاملة لـ Latoga، علامة موضة، لإنشاء حضور علامة تجارية حديث ومتسق ومعروف. شمل المشروع تطوير الشعار وأنظمة الألوان والطباعة والعناصر البصرية وتطبيقات العلامة التجارية عبر نقاط الاتصال الرقمية والتسويقية.',
                ],
                'category' => [
                    'en' => 'Visual Identity Design',
                    'ar' => 'تصميم الهوية البصرية',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767369371739-yfw62o.jpg',
                'gallery' => [],
                'client_name' => [
                    'en' => 'Latoga Fashion Brand',
                    'ar' => 'علامة Latoga للموضة',
                ],
                'project_date' => '2024-01-15',
                'project_url' => null,
                'order' => 1,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Visual Identity Design for Latoga Fashion Brand',
                    'ar' => 'تصميم الهوية البصرية لعلامة Latoga للموضة',
                ],
                'meta_description' => [
                    'en' => 'Complete visual identity design for Latoga fashion brand including logo, color system, and brand applications.',
                    'ar' => 'تصميم هوية بصرية كاملة لعلامة Latoga للموضة بما في ذلك الشعار ونظام الألوان وتطبيقات العلامة التجارية.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Digital Marketing for Matrix (Masfoofat Al-Taqnia)',
                    'ar' => 'التسويق الرقمي لـ Matrix (مصفوفات التقنية)',
                ],
                'description' => [
                    'en' => 'COMPACT delivered integrated digital marketing for Matrix (Masfoofat Al-Taqnia) to increase brand visibility, generate qualified leads, and improve performance through content strategy, paid campaigns, and analytics-driven optimization.',
                    'ar' => 'قدمت COMPACT تسويق رقمي متكامل لـ Matrix (مصفوفات التقنية) لزيادة ظهور العلامة التجارية وتوليد عملاء محتملين مؤهلين وتحسين الأداء من خلال استراتيجية المحتوى والحملات المدفوعة والتحسين القائم على التحليلات.',
                ],
                'full_description' => [
                    'en' => 'COMPACT delivered integrated digital marketing for Matrix (Masfoofat Al-Taqnia) to increase brand visibility, generate qualified leads, and improve performance through content strategy, paid campaigns, and analytics-driven optimization.',
                    'ar' => 'قدمت COMPACT تسويق رقمي متكامل لـ Matrix (مصفوفات التقنية) لزيادة ظهور العلامة التجارية وتوليد عملاء محتملين مؤهلين وتحسين الأداء من خلال استراتيجية المحتوى والحملات المدفوعة والتحسين القائم على التحليلات.',
                ],
                'category' => [
                    'en' => 'Digital Marketing',
                    'ar' => 'التسويق الرقمي',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767369194317-uge4kq.png',
                'gallery' => [],
                'client_name' => [
                    'en' => 'Matrix (Masfoofat Al-Taqnia)',
                    'ar' => 'Matrix (مصفوفات التقنية)',
                ],
                'project_date' => '2024-02-20',
                'project_url' => null,
                'order' => 2,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Digital Marketing for Matrix',
                    'ar' => 'التسويق الرقمي لـ Matrix',
                ],
                'meta_description' => [
                    'en' => 'Integrated digital marketing services for Matrix to increase brand visibility and generate leads.',
                    'ar' => 'خدمات تسويق رقمي متكاملة لـ Matrix لزيادة ظهور العلامة التجارية وتوليد العملاء المحتملين.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Website Development for Rento Co for vehicles rental service',
                    'ar' => 'تطوير موقع ويب لشركة Rento لخدمة تأجير المركبات',
                ],
                'description' => [
                    'en' => 'Rento Car Rental Website – UI/UX Design & Development (Moken). Complete website development for Rento Co, a vehicle rental service, including responsive design, booking system, and payment integration.',
                    'ar' => 'موقع تأجير السيارات Rento – تصميم وتطوير واجهة المستخدم/تجربة المستخدم. تطوير موقع ويب كامل لشركة Rento، خدمة تأجير المركبات، بما في ذلك التصميم المتجاوب ونظام الحجز وتكامل الدفع.',
                ],
                'full_description' => [
                    'en' => 'Rento Car Rental Website – UI/UX Design & Development (Moken). Complete website development for Rento Co, a vehicle rental service, including responsive design, booking system, and payment integration.',
                    'ar' => 'موقع تأجير السيارات Rento – تصميم وتطوير واجهة المستخدم/تجربة المستخدم. تطوير موقع ويب كامل لشركة Rento، خدمة تأجير المركبات، بما في ذلك التصميم المتجاوب ونظام الحجز وتكامل الدفع.',
                ],
                'category' => [
                    'en' => 'Web Development',
                    'ar' => 'تطوير الويب',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767369631707-8gr9oq.webp',
                'gallery' => [],
                'client_name' => [
                    'en' => 'Rento Co',
                    'ar' => 'شركة Rento',
                ],
                'project_date' => '2024-03-10',
                'project_url' => null,
                'order' => 3,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Website Development for Rento Car Rental',
                    'ar' => 'تطوير موقع ويب لتأجير السيارات Rento',
                ],
                'meta_description' => [
                    'en' => 'Complete website development for Rento Co vehicle rental service with booking system.',
                    'ar' => 'تطوير موقع ويب كامل لخدمة تأجير المركبات Rento مع نظام الحجز.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Digital Marketing Management for yallagoom website',
                    'ar' => 'إدارة التسويق الرقمي لموقع yallagoom',
                ],
                'description' => [
                    'en' => 'Digital Marketing Management for yallagoom website including social media management, content marketing, SEO optimization, and paid advertising campaigns.',
                    'ar' => 'إدارة التسويق الرقمي لموقع yallagoom بما في ذلك إدارة وسائل التواصل الاجتماعي والتسويق بالمحتوى وتحسين محركات البحث وحملات الإعلانات المدفوعة.',
                ],
                'full_description' => [
                    'en' => 'Digital Marketing Management for yallagoom website including social media management, content marketing, SEO optimization, and paid advertising campaigns.',
                    'ar' => 'إدارة التسويق الرقمي لموقع yallagoom بما في ذلك إدارة وسائل التواصل الاجتماعي والتسويق بالمحتوى وتحسين محركات البحث وحملات الإعلانات المدفوعة.',
                ],
                'category' => [
                    'en' => 'Digital Marketing',
                    'ar' => 'التسويق الرقمي',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767368479210-m929sc.png',
                'gallery' => [],
                'client_name' => [
                    'en' => 'Yallagoom',
                    'ar' => 'يلاغوم',
                ],
                'project_date' => '2024-04-05',
                'project_url' => null,
                'order' => 4,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Digital Marketing Management for Yallagoom',
                    'ar' => 'إدارة التسويق الرقمي لـ Yallagoom',
                ],
                'meta_description' => [
                    'en' => 'Complete digital marketing management services for Yallagoom website.',
                    'ar' => 'خدمات إدارة تسويق رقمي كاملة لموقع Yallagoom.',
                ],
            ],
        ];
        
        // Clear existing projects
        Project::query()->delete();
        
        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}
