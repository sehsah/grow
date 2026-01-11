<?php

namespace Database\Seeders;

use App\Models\WorkingProcess;
use Illuminate\Database\Seeder;

class WorkingProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $processes = [
            [
                'step_number' => 'Step 01',
                'title' => [
                    'en' => 'Research',
                    'ar' => 'البحث',
                ],
                'description' => [
                    'en' => 'In-depth research to uncover insights and drive informed decisions.',
                    'ar' => 'بحث متعمق للكشف عن الرؤى واتخاذ قرارات مستنيرة.',
                ],
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-7 h-7 text-foreground"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'step_number' => 'Step 02',
                'title' => [
                    'en' => 'Concept Design',
                    'ar' => 'التصميم المفهومي',
                ],
                'description' => [
                    'en' => 'Creative concept designs that transform ideas into impactful solutions.',
                    'ar' => 'تصاميم مفاهيمية إبداعية تحول الأفكار إلى حلول مؤثرة.',
                ],
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-7 h-7 text-foreground"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'step_number' => 'Step 03',
                'title' => [
                    'en' => 'Implementation',
                    'ar' => 'التنفيذ',
                ],
                'description' => [
                    'en' => 'Efficient implementation of tailored strategies to achieve goals.',
                    'ar' => 'تنفيذ فعال للاستراتيجيات المصممة خصيصاً لتحقيق الأهداف.',
                ],
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cog w-7 h-7 text-foreground"><path d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z"></path><path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path><path d="M12 2v2"></path><path d="M12 22v-2"></path><path d="m17 20.66-1-1.73"></path><path d="M11 10.27 7 3.34"></path><path d="m20.66 17-1.73-1"></path><path d="m3.34 7 1.73 1"></path><path d="M14 12h8"></path><path d="M2 12h2"></path><path d="m20.66 7-1.73 1"></path><path d="m3.34 17 1.73-1"></path><path d="m17 3.34-1 1.73"></path><path d="m11 13.73-4 6.93"></path></svg>',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'step_number' => 'Step 04',
                'title' => [
                    'en' => 'Testing',
                    'ar' => 'الاختبار',
                ],
                'description' => [
                    'en' => 'Testing to ensure flawless functionality and optimal user experience.',
                    'ar' => 'اختبار لضمان الأداء المثالي وتجربة المستخدم المثلى.',
                ],
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-7 h-7 text-foreground"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>',
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($processes as $process) {
            WorkingProcess::updateOrCreate(
                ['step_number' => $process['step_number']],
                $process
            );
        }
    }
}
