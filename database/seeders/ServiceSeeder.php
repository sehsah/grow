<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => [
                    'en' => 'Organizational Development',
                    'ar' => 'التطوير التنظيمي',
                ],
                'slug' => 'organizational-development',
                'short_description' => [
                    'en' => 'Transform your organization with strategic planning and process optimization.',
                    'ar' => 'قم بتحويل مؤسستك من خلال التخطيط الاستراتيجي وتحسين العمليات.',
                ],
                'description' => [
                    'en' => 'Transform your organization with strategic planning and process optimization. We help businesses restructure their operations, improve efficiency, and achieve sustainable growth through proven organizational development methodologies.',
                    'ar' => 'قم بتحويل مؤسستك من خلال التخطيط الاستراتيجي وتحسين العمليات. نساعد الشركات على إعادة هيكلة عملياتها وتحسين الكفاءة وتحقيق النمو المستدام من خلال منهجيات التطوير التنظيمي المثبتة.',
                ],
                'category' => [
                    'en' => 'Business Consulting',
                    'ar' => 'استشارات الأعمال',
                ],
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-8 h-8 text-primary"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>',
                'order' => 1,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Organizational Development Services | Business Consulting',
                    'ar' => 'خدمات التطوير التنظيمي | استشارات الأعمال',
                ],
                'meta_description' => [
                    'en' => 'Transform your organization with strategic planning and process optimization. Expert business consulting services.',
                    'ar' => 'قم بتحويل مؤسستك من خلال التخطيط الاستراتيجي وتحسين العمليات. خدمات استشارات أعمال خبيرة.',
                ],
            ],
            [
                'title' => [
                    'en' => 'CRM Solutions',
                    'ar' => 'حلول إدارة علاقات العملاء',
                ],
                'slug' => 'crm',
                'short_description' => [
                    'en' => 'Implement and optimize customer relationship management systems.',
                    'ar' => 'تنفيذ وتحسين أنظمة إدارة علاقات العملاء.',
                ],
                'description' => [
                    'en' => 'Implement and optimize customer relationship management systems. Our CRM solutions help businesses manage customer interactions, improve sales processes, and enhance customer satisfaction through data-driven insights and automation.',
                    'ar' => 'تنفيذ وتحسين أنظمة إدارة علاقات العملاء. تساعد حلول CRM لدينا الشركات على إدارة تفاعلات العملاء وتحسين عمليات المبيعات وزيادة رضا العملاء من خلال الرؤى القائمة على البيانات والأتمتة.',
                ],
                'category' => [
                    'en' => 'Sales',
                    'ar' => 'المبيعات',
                ],
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                'order' => 2,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'CRM Solutions | Customer Relationship Management',
                    'ar' => 'حلول CRM | إدارة علاقات العملاء',
                ],
                'meta_description' => [
                    'en' => 'Implement and optimize customer relationship management systems for better sales and customer satisfaction.',
                    'ar' => 'تنفيذ وتحسين أنظمة إدارة علاقات العملاء لتحسين المبيعات ورضا العملاء.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Outsourcing Services',
                    'ar' => 'خدمات الاستعانة بالمصادر الخارجية',
                ],
                'slug' => 'outsourcing',
                'short_description' => [
                    'en' => 'Access skilled professionals and resources to support your operations.',
                    'ar' => 'الوصول إلى المحترفين المهرة والموارد لدعم عملياتك.',
                ],
                'description' => [
                    'en' => 'Access skilled professionals and resources to support your operations. Our outsourcing services provide businesses with access to expert talent and resources, allowing you to focus on core business activities while we handle specialized tasks efficiently.',
                    'ar' => 'الوصول إلى المحترفين المهرة والموارد لدعم عملياتك. توفر خدمات الاستعانة بالمصادر الخارجية لدينا للشركات الوصول إلى المواهب الخبيرة والموارد، مما يتيح لك التركيز على أنشطة الأعمال الأساسية بينما نتعامل مع المهام المتخصصة بكفاءة.',
                ],
                'category' => [
                    'en' => 'Talent Acquisition',
                    'ar' => 'اكتساب المواهب',
                ],
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cog w-8 h-8 text-primary"><path d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z"></path><path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path><path d="M12 2v2"></path><path d="M12 22v-2"></path><path d="m17 20.66-1-1.73"></path><path d="M11 10.27 7 3.34"></path><path d="m20.66 17-1.73-1"></path><path d="m3.34 7 1.73 1"></path><path d="M14 12h8"></path><path d="M2 12h2"></path><path d="m20.66 7-1.73 1"></path><path d="m3.34 17 1.73-1"></path><path d="m17 3.34-1 1.73"></path><path d="m11 13.73-4 6.93"></path></svg>',
                'order' => 3,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Outsourcing Services | Talent Acquisition',
                    'ar' => 'خدمات الاستعانة بالمصادر الخارجية | اكتساب المواهب',
                ],
                'meta_description' => [
                    'en' => 'Access skilled professionals and resources to support your operations through our outsourcing services.',
                    'ar' => 'الوصول إلى المحترفين المهرة والموارد لدعم عملياتك من خلال خدمات الاستعانة بالمصادر الخارجية لدينا.',
                ],
            ],
            [
                'title' => [
                    'en' => 'IT Development',
                    'ar' => 'تطوير تكنولوجيا المعلومات',
                ],
                'slug' => 'it-development',
                'short_description' => [
                    'en' => 'Custom software development and digital transformation solutions.',
                    'ar' => 'تطوير برمجيات مخصصة وحلول التحول الرقمي.',
                ],
                'description' => [
                    'en' => 'Custom software development and digital transformation solutions. We provide end-to-end IT development services including web applications, mobile apps, system integration, and digital transformation solutions tailored to your business needs.',
                    'ar' => 'تطوير برمجيات مخصصة وحلول التحول الرقمي. نقدم خدمات تطوير تكنولوجيا المعلومات الشاملة بما في ذلك تطبيقات الويب والتطبيقات المحمولة وتكامل الأنظمة وحلول التحول الرقمي المصممة خصيصاً لاحتياجات عملك.',
                ],
                'category' => [
                    'en' => 'Web Development',
                    'ar' => 'تطوير الويب',
                ],
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor w-8 h-8 text-primary"><rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>',
                'order' => 4,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'IT Development Services | Custom Software Development',
                    'ar' => 'خدمات تطوير تكنولوجيا المعلومات | تطوير البرمجيات المخصصة',
                ],
                'meta_description' => [
                    'en' => 'Custom software development and digital transformation solutions for your business.',
                    'ar' => 'تطوير برمجيات مخصصة وحلول التحول الرقمي لعملك.',
                ],
            ],
        ];

        // Clear existing services
        Service::query()->delete();

        $disk = Storage::disk('public');
        $directory = 'services';

        foreach ($services as $serviceData) {
            $icon = $serviceData['icon'];
            
            // Check if icon is raw SVG
            if ($icon && str_contains($icon, '<svg')) {
                // Get English title for filename
                $titleEn = is_array($serviceData['title']) ? $serviceData['title']['en'] : $serviceData['title'];
                $slug = Str::slug($titleEn);
                $filename = "{$directory}/{$slug}.svg";
                
                // Save the file
                $disk->put($filename, $icon);
                
                $serviceData['icon'] = $filename;
            }

            Service::create($serviceData);
        }
    }
}
