<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            // Home Page
            [
                'key' => 'home.complete_work',
                'value' => [
                    'en' => 'Complete Work',
                    'ar' => 'أعمال مكتملة',
                ],
                'group' => 'home',
                'description' => 'Badge text for projects section',
            ],
            [
                'key' => 'home.working_process',
                'value' => [
                    'en' => 'Working Process',
                    'ar' => 'عملية العمل',
                ],
                'group' => 'home',
                'description' => 'Section title for working process',
            ],
            [
                'key' => 'home.working_process_subtitle',
                'value' => [
                    'en' => 'The Process Behind the Magic Step by Step',
                    'ar' => 'العملية وراء السحر خطوة بخطوة',
                ],
                'group' => 'home',
                'description' => 'Subtitle for working process section',
            ],
            [
                'key' => 'home.our_team',
                'value' => [
                    'en' => 'Our Team',
                    'ar' => 'فريقنا',
                ],
                'group' => 'home',
                'description' => 'Badge text for team section',
            ],
            [
                'key' => 'home.meet_experts',
                'value' => [
                    'en' => 'Meet the Experts Behind',
                    'ar' => 'تعرف على الخبراء وراء',
                ],
                'group' => 'home',
                'description' => 'Title for team section',
            ],
            [
                'key' => 'home.view_teams',
                'value' => [
                    'en' => 'View Teams',
                    'ar' => 'عرض الفرق',
                ],
                'group' => 'home',
                'description' => 'Button text to view all teams',
            ],
            [
                'key' => 'home.our_partners',
                'value' => [
                    'en' => 'Our Partners',
                    'ar' => 'شركاؤنا',
                ],
                'group' => 'home',
                'description' => 'Badge text for partners section',
            ],
            [
                'key' => 'home.trusted_by',
                'value' => [
                    'en' => 'Trusted By',
                    'ar' => 'موثوق به من قبل',
                ],
                'group' => 'home',
                'description' => 'Partners section title part 1',
            ],
            [
                'key' => 'home.leading_companies',
                'value' => [
                    'en' => 'Leading Companies',
                    'ar' => 'الشركات الرائدة',
                ],
                'group' => 'home',
                'description' => 'Partners section title part 2',
            ],
            [
                'key' => 'home.target_fields',
                'value' => [
                    'en' => 'Our Target Fields',
                    'ar' => 'مجالاتنا المستهدفة',
                ],
                'group' => 'home',
                'description' => 'Title for target fields section',
            ],
            [
                'key' => 'home.target_fields_description',
                'value' => [
                    'en' => 'We are proud to serve a wide range of industries',
                    'ar' => 'نفخر بخدمة مجموعة واسعة من الصناعات',
                ],
                'group' => 'home',
                'description' => 'Description for target fields section',
            ],
            [
                'key' => 'home.lets_start_conversation',
                'value' => [
                    'en' => 'Let\'s Start a Conversation',
                    'ar' => 'لنبدأ محادثة',
                ],
                'group' => 'home',
                'description' => 'Title for contact CTA section',
            ],
            [
                'key' => 'home.get_in_touch',
                'value' => [
                    'en' => 'Get in touch with our team to discuss how we can help your business grow.',
                    'ar' => 'تواصل مع فريقنا لمناقشة كيف يمكننا مساعدة عملك على النمو.',
                ],
                'group' => 'home',
                'description' => 'Description for contact CTA section',
            ],
            [
                'key' => 'home.view_all',
                'value' => [
                    'en' => 'View All',
                    'ar' => 'عرض الكل',
                ],
                'group' => 'home',
                'description' => 'Button text to view all items',
            ],
            [
                'key' => 'home.learn_more',
                'value' => [
                    'en' => 'Learn More',
                    'ar' => 'اعرف المزيد',
                ],
                'group' => 'home',
                'description' => 'Button text to learn more',
            ],
        ];

        foreach ($translations as $translation) {
            Translation::updateOrCreate(
                ['key' => $translation['key']],
                $translation
            );
        }
    }
}
