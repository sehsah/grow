<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\Setting;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('settings:seed-home-content {--force : Overwrite existing values}', function () {
    $force = (bool) $this->option('force');

    $strengthsTitle = [
        'en' => 'Our Strengths',
        'ar' => 'نقاط قوتنا',
    ];

    $strengthsSubtitle = [
        'en' => 'Competitive Advantages',
        'ar' => 'المزايا التنافسية',
    ];

    $competitiveAdvantages = [
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-5 h-5 md:w-7 md:h-7 text-primary"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>',
            'title' => [
                'en' => '10+ Years Experience',
                'ar' => 'خبرة أكثر من 10 سنوات',
            ],
            'description' => [
                'en' => 'Proven track record of delivering successful projects across various industries.',
                'ar' => 'سجل مثبت في تنفيذ مشاريع ناجحة عبر مختلف القطاعات.',
            ],
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-5 h-5 md:w-7 md:h-7 text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
            'title' => [
                'en' => '100+ Team Members',
                'ar' => 'أكثر من 100 عضو فريق',
            ],
            'description' => [
                'en' => 'Expert professionals dedicated to your business success.',
                'ar' => 'خبراء متخصصون مكرسون لنجاح أعمالك.',
            ],
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-5 h-5 md:w-7 md:h-7 text-primary"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>',
            'title' => [
                'en' => 'Result-Oriented',
                'ar' => 'موجه للنتائج',
            ],
            'description' => [
                'en' => 'We focus on delivering measurable outcomes and real business value.',
                'ar' => 'نركز على تقديم نتائج قابلة للقياس وقيمة حقيقية للأعمال.',
            ],
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-5 h-5 md:w-7 md:h-7 text-primary"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>',
            'title' => [
                'en' => 'Quality Assurance',
                'ar' => 'ضمان الجودة',
            ],
            'description' => [
                'en' => 'ISO certified processes ensuring highest quality standards.',
                'ar' => 'عمليات معتمدة وفق ISO لضمان أعلى معايير الجودة.',
            ],
        ],
    ];

    $coreValues = [
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-4 h-4 md:w-5 md:h-5 text-primary"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>',
            'title' => ['en' => 'Passion', 'ar' => 'الشغف'],
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-4 h-4 md:w-5 md:h-5 text-primary"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>',
            'title' => ['en' => 'Integrity', 'ar' => 'النزاهة'],
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-4 h-4 md:w-5 md:h-5 text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
            'title' => ['en' => 'Teamwork', 'ar' => 'العمل الجماعي'],
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb w-4 h-4 md:w-5 md:h-5 text-primary"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path><path d="M9 18h6"></path><path d="M10 22h4"></path></svg>',
            'title' => ['en' => 'Innovation', 'ar' => 'الابتكار'],
        ],
    ];

    $setIfEmpty = function (string $key, mixed $value, string $group) use ($force) {
        $existing = Setting::getValue($key);

        $isEmpty = $existing === null
            || $existing === ''
            || (is_array($existing) && count($existing) === 0);

        if (!$force && !$isEmpty) {
            return 'skipped';
        }

        Setting::setValue($key, $value, 'json', $group);
        return $existing === null ? 'created' : 'updated';
    };

    $results = [
        'home.strengths_title' => $setIfEmpty('home.strengths_title', $strengthsTitle, 'home'),
        'home.strengths_subtitle' => $setIfEmpty('home.strengths_subtitle', $strengthsSubtitle, 'home'),
        'home.competitive_advantages' => $setIfEmpty('home.competitive_advantages', $competitiveAdvantages, 'home'),
        'home.core_values' => $setIfEmpty('home.core_values', $coreValues, 'home'),
    ];

    foreach ($results as $key => $status) {
        $this->line("{$key}: {$status}");
    }
})->purpose('Seed current home page content (competitive advantages + core values) into settings');
