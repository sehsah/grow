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
            [
                'key' => 'home.explore_services',
                'value' => ['en' => 'Explore Our Services', 'ar' => 'استكشف خدماتنا'],
                'group' => 'home',
                'description' => 'Button text',
            ],
            [
                'key' => 'home.our_services_btn',
                'value' => ['en' => 'Our Services', 'ar' => 'خدماتنا'],
                'group' => 'home',
                'description' => 'Button text',
            ],
            [
                'key' => 'home.why_choose_us',
                'value' => ['en' => 'Why Choose Us', 'ar' => 'لماذا تختارنا'],
                'group' => 'home',
                'description' => 'Section badge',
            ],
            [
                'key' => 'home.result_oriented',
                'value' => ['en' => 'Result-Oriented', 'ar' => 'موجه للنتائج'],
                'group' => 'home',
                'description' => 'Advantage title',
            ],
            [
                'key' => 'home.result_oriented_desc',
                'value' => ['en' => 'We focus on delivering measurable outcomes and real business value.', 'ar' => 'نحن نركز على تقديم نتائج قابلة للقياس وقيمة عمل حقيقية.'],
                'group' => 'home',
                'description' => 'Advantage description',
            ],
            [
                'key' => 'home.quality_assurance',
                'value' => ['en' => 'Quality Assurance', 'ar' => 'ضمان الجودة'],
                'group' => 'home',
                'description' => 'Advantage title',
            ],
            [
                'key' => 'home.quality_assurance_desc',
                'value' => ['en' => 'ISO certified processes ensuring highest quality standards.', 'ar' => 'عمليات معتمدة من ISO تضمن أعلى معايير الجودة.'],
                'group' => 'home',
                'description' => 'Advantage description',
            ],
            [
                'key' => 'home.our_core_values',
                'value' => ['en' => 'Our Core Values', 'ar' => 'قيمنا الجوهرية'],
                'group' => 'home',
                'description' => 'Section title',
            ],
            [
                'key' => 'home.learn_more_about_us',
                'value' => ['en' => 'Learn More About Us', 'ar' => 'اعرف المزيد عنا'],
                'group' => 'home',
                'description' => 'Button text',
            ],
            [
                'key' => 'home.lets_talk',
                'value' => ['en' => 'Let\'s Talk', 'ar' => 'لنتحدث'],
                'group' => 'home',
                'description' => 'Button text',
            ],
            // About Page
            [
                'key' => 'about.title',
                'value' => ['en' => 'About Us', 'ar' => 'من نحن'],
                'group' => 'about',
                'description' => 'Page title',
            ],
            [
                'key' => 'about.partner_title',
                'value' => ['en' => 'Your Partner in Business Excellence', 'ar' => 'شريكك في التميز في الأعمال'],
                'group' => 'about',
                'description' => 'Main section title',
            ],
            [
                'key' => 'about.why_compact',
                'value' => ['en' => 'Why COMPACT', 'ar' => 'لماذا كومباكت'],
                'group' => 'about',
                'description' => 'Section badge',
            ],
            [
                'key' => 'about.clients',
                'value' => ['en' => 'Clients', 'ar' => 'عملاء'],
                'group' => 'about',
                'description' => 'Statistic label',
            ],
            [
                'key' => 'about.clients_desc',
                'value' => ['en' => 'Trusted by leading organizations', 'ar' => 'موثوق به من قبل المنظمات الرائدة'],
                'group' => 'about',
                'description' => 'Statistic description',
            ],
            [
                'key' => 'about.projects',
                'value' => ['en' => 'Projects', 'ar' => 'مشاريع'],
                'group' => 'about',
                'description' => 'Statistic label',
            ],
            [
                'key' => 'about.projects_desc',
                'value' => ['en' => 'Successfully delivered', 'ar' => 'تم تسليمها بنجاح'],
                'group' => 'about',
                'description' => 'Statistic description',
            ],
            [
                'key' => 'about.experts',
                'value' => ['en' => 'Experts', 'ar' => 'خبراء'],
                'group' => 'about',
                'description' => 'Statistic label',
            ],
            [
                'key' => 'about.experts_desc',
                'value' => ['en' => 'Dedicated professionals', 'ar' => 'محترفون متفانون'],
                'group' => 'about',
                'description' => 'Statistic description',
            ],
            [
                'key' => 'about.years',
                'value' => ['en' => 'Years', 'ar' => 'سنوات'],
                'group' => 'about',
                'description' => 'Statistic label',
            ],
            [
                'key' => 'about.years_desc',
                'value' => ['en' => 'Industry experience', 'ar' => 'خبرة صناعية'],
                'group' => 'about',
                'description' => 'Statistic description',
            ],
            [
                'key' => 'about.mission_title',
                'value' => ['en' => 'Our Mission', 'ar' => 'مهمتنا'],
                'group' => 'about',
                'description' => 'Section title',
            ],
            [
                'key' => 'about.vision_title',
                'value' => ['en' => 'Our Vision', 'ar' => 'رؤيتنا'],
                'group' => 'about',
                'description' => 'Section title',
            ],
            [
                'key' => 'about.values_title',
                'value' => ['en' => 'Our Values', 'ar' => 'قيمنا'],
                'group' => 'about',
                'description' => 'Section title',
            ],
            [
                'key' => 'about.value_passion',
                'value' => ['en' => 'Passion', 'ar' => 'الشغف'],
                'group' => 'about',
                'description' => 'Core value',
            ],
            [
                'key' => 'about.value_integrity',
                'value' => ['en' => 'Integrity', 'ar' => 'النزاهة'],
                'group' => 'about',
                'description' => 'Core value',
            ],
            [
                'key' => 'about.value_teamwork',
                'value' => ['en' => 'Teamwork', 'ar' => 'العمل الجماعي'],
                'group' => 'about',
                'description' => 'Core value',
            ],
            [
                'key' => 'about.value_balance',
                'value' => ['en' => 'Balance', 'ar' => 'التوازن'],
                'group' => 'about',
                'description' => 'Core value',
            ],
            [
                'key' => 'about.value_innovation',
                'value' => ['en' => 'Innovation', 'ar' => 'الابتكار'],
                'group' => 'about',
                'description' => 'Core value',
            ],
            [
                'key' => 'about.value_security',
                'value' => ['en' => 'Security', 'ar' => 'الأمان'],
                'group' => 'about',
                'description' => 'Core value',
            ],
            [
                'key' => 'about.value_creativity',
                'value' => ['en' => 'Creativity', 'ar' => 'الإبداع'],
                'group' => 'about',
                'description' => 'Core value',
            ],
            [
                'key' => 'about.target_fields_title',
                'value' => ['en' => 'Our Target Fields', 'ar' => 'مجالاتنا المستهدفة'],
                'group' => 'about',
                'description' => 'Section title',
            ],
            [
                'key' => 'about.target_fields_subtitle',
                'value' => ['en' => 'We are proud to serve a wide range of industries', 'ar' => 'نحن فخورون بخدمة مجموعة واسعة من الصناعات'],
                'group' => 'about',
                'description' => 'Section subtitle',
            ],
            [
                'key' => 'about.field_construction',
                'value' => ['en' => 'Construction', 'ar' => 'إنشاءات'],
                'group' => 'about',
                'description' => 'Industry name',
            ],
            [
                'key' => 'about.field_fashion',
                'value' => ['en' => 'Fashion-Clothes', 'ar' => 'أزياء وملابس'],
                'group' => 'about',
                'description' => 'Industry name',
            ],
            [
                'key' => 'about.field_fleet',
                'value' => ['en' => 'Fleet-Management', 'ar' => 'إدارة أسطول'],
                'group' => 'about',
                'description' => 'Industry name',
            ],
            [
                'key' => 'about.field_real_estate',
                'value' => ['en' => 'Real-Estate', 'ar' => 'عقارات'],
                'group' => 'about',
                'description' => 'Industry name',
            ],
            // Services Page
            [
                'key' => 'services.title',
                'value' => ['en' => 'Services', 'ar' => 'خدمات'],
                'group' => 'services',
                'description' => 'Page title',
            ],
            [
                'key' => 'services.title2',
                'value' => ['en' => 'We offer comprehensive solutions tailored to your unique business needs, driving growth and digital transformation.', 'ar' => 'نقدم حلولاً شاملة مصممة خصيصًا لاحتياجات عملك الفريدة، مما يدفع النمو والتحول الرقمي.'],
                'group' => 'services',
                'description' => 'Page description',
            ],
            [
                'key' => 'services.subtitle',
                'value' => [
                    'en' => 'We offer comprehensive solutions tailored to your unique business needs, driving growth and digital transformation.',
                    'ar' => 'نقدم حلولاً شاملة مصممة خصيصًا لاحتياجات عملك الفريدة، مما يدفع النمو والتحول الرقمي.'
                ],
                'group' => 'services',
                'description' => 'Page subtitle',
            ],
            // Projects Page
            [
                'key' => 'projects.title',
                'value' => ['en' => 'Our Projects', 'ar' => 'مشاريعنا'],
                'group' => 'projects',
                'description' => 'Page title',
            ],
            [
                'key' => 'projects.subtitle',
                'value' => [
                    'en' => 'Discover a collection of creative projects we have delivered to clients around the world.',
                    'ar' => 'اكتشف مجموعة من المشاريع الإبداعية التي قدمناها للعملاء حول العالم.'
                ],
                'group' => 'projects',
                'description' => 'Page subtitle',
            ],
            [
                'key' => 'projects.view_project',
                'value' => ['en' => 'View Project', 'ar' => 'عرض المشروع'],
                'group' => 'projects',
                'description' => 'Button text',
            ],
            // Blog Page
            [
                'key' => 'blog.badge',
                'value' => ['en' => 'Blog', 'ar' => 'مدونة'],
                'group' => 'blog',
                'description' => 'Badge text',
            ],
            [
                'key' => 'blog.title_insights',
                'value' => ['en' => 'Insights &', 'ar' => 'رؤى و'],
                'group' => 'blog',
                'description' => 'Title part 1',
            ],
            [
                'key' => 'blog.title_articles',
                'value' => ['en' => 'Articles', 'ar' => 'مقاﻻت'],
                'group' => 'blog',
                'description' => 'Title part 2',
            ],
            [
                'key' => 'blog.read_more',
                'value' => ['en' => 'Read More', 'ar' => 'اقرأ المزيد'],
                'group' => 'blog',
                'description' => 'Button text',
            ],
            [
                'key' => 'blog.min_read',
                'value' => ['en' => 'min read', 'ar' => 'دقيقة قراءة'],
                'group' => 'blog',
                'description' => 'Time suffix',
            ],
            [
                'key' => 'blog.all_articles',
                'value' => ['en' => 'All Articles', 'ar' => 'كل المقالات'],
                'group' => 'blog',
                'description' => 'Section title',
            ],
            [
                'key' => 'blog.no_posts',
                'value' => ['en' => 'No blog posts available at the moment.', 'ar' => 'لا توجد منشورات مدونة متاحة في الوقت الحالي.'],
                'group' => 'blog',
                'description' => 'Empty state message',
            ],
            [
                'key' => 'blog.newsletter_title',
                'value' => ['en' => 'Subscribe to Our Newsletter', 'ar' => 'اشترك في نشرتنا الإخبارية'],
                'group' => 'blog',
                'description' => 'Section title',
            ],
            [
                'key' => 'blog.newsletter_desc',
                'value' => ['en' => 'Get the latest articles and insights delivered directly to your inbox', 'ar' => 'احصل على أحدث المقالات والرؤى مباشرة في صندوق الوارد الخاص بك'],
                'group' => 'blog',
                'description' => 'Section description',
            ],
            [
                'key' => 'blog.email_placeholder',
                'value' => ['en' => 'Enter your email', 'ar' => 'أدخل بريدك الإلكتروني'],
                'group' => 'blog',
                'description' => 'Input placeholder',
            ],
            [
                'key' => 'blog.subscribe',
                'value' => ['en' => 'Subscribe', 'ar' => 'اشترك'],
                'group' => 'blog',
                'description' => 'Button text',
            ],
            // Contact Page
            [
                'key' => 'contact.title',
                'value' => ['en' => 'Contact Us', 'ar' => 'اتصل بنا'],
                'group' => 'contact',
                'description' => 'Page title',
            ],
            [
                'key' => 'contact.subtitle',
                'value' => [
                    'en' => 'Get in touch with our team to discuss how we can help your business grow.',
                    'ar' => 'تواصل مع فريقنا لمناقشة كيف يمكننا مساعدة عملك على النمو.'
                ],
                'group' => 'contact',
                'description' => 'Page subtitle',
            ],
            [
                'key' => 'contact.form_title',
                'value' => ['en' => 'Get started and grow your business now.', 'ar' => 'ابدأ وقم بتنمية عملك الآن.'],
                'group' => 'contact',
                'description' => 'Form title',
            ],
            [
                'key' => 'contact.form_subtitle',
                'value' => [
                    'en' => 'Start today to unlock opportunities and drive your business toward success.',
                    'ar' => 'ابدأ اليوم لفتح الفرص ودفع عملك نحو النجاح.'
                ],
                'group' => 'contact',
                'description' => 'Form subtitle',
            ],
            [
                'key' => 'contact.name',
                'value' => ['en' => 'Name', 'ar' => 'الاسم'],
                'group' => 'contact',
                'description' => 'Form label/placeholder',
            ],
            [
                'key' => 'contact.email',
                'value' => ['en' => 'Email Address', 'ar' => 'عنوان البريد الإلكتروني'],
                'group' => 'contact',
                'description' => 'Form label/placeholder',
            ],
            [
                'key' => 'contact.phone',
                'value' => ['en' => 'Phone Number', 'ar' => 'رقم الهاتف'],
                'group' => 'contact',
                'description' => 'Form label/placeholder',
            ],
            [
                'key' => 'contact.service_label',
                'value' => ['en' => 'Select your required service/s', 'ar' => 'اختر الخدمة/الخدمات المطلوبة'],
                'group' => 'contact',
                'description' => 'Form label',
            ],
            [
                'key' => 'contact.subject',
                'value' => ['en' => 'Subject', 'ar' => 'الموضوع'],
                'group' => 'contact',
                'description' => 'Form label/placeholder',
            ],
            [
                'key' => 'contact.message',
                'value' => ['en' => 'Message', 'ar' => 'الرسالة'],
                'group' => 'contact',
                'description' => 'Form label/placeholder',
            ],
            [
                'key' => 'contact.send_message',
                'value' => ['en' => 'Send Message', 'ar' => 'إرسال الرسالة'],
                'group' => 'contact',
                'description' => 'Button text',
            ],
            // Common
            [
                'key' => 'common.home',
                'value' => ['en' => 'Home', 'ar' => 'الرئيسية'],
                'group' => 'common',
                'description' => 'Navigation item',
            ],
            [
                'key' => 'common.about',
                'value' => ['en' => 'About', 'ar' => 'من نحن'],
                'group' => 'common',
                'description' => 'Navigation item',
            ],
            [
                'key' => 'common.services',
                'value' => ['en' => 'Services', 'ar' => 'الخدمات'],
                'group' => 'common',
                'description' => 'Navigation item',
            ],
            [
                'key' => 'common.all_services',
                'value' => ['en' => 'All Services', 'ar' => 'جميع الخدمات'],
                'group' => 'common',
                'description' => 'Navigation item',
            ],
            [
                'key' => 'common.projects',
                'value' => ['en' => 'Projects', 'ar' => 'المشاريع'],
                'group' => 'common',
                'description' => 'Navigation item',
            ],
            [
                'key' => 'common.blog',
                'value' => ['en' => 'Blog', 'ar' => 'المدونة'],
                'group' => 'common',
                'description' => 'Navigation item',
            ],
            [
                'key' => 'common.career',
                'value' => ['en' => 'Career', 'ar' => 'الوظائف'],
                'group' => 'common',
                'description' => 'Navigation item',
            ],
            [
                'key' => 'common.contact',
                'value' => ['en' => 'Contact', 'ar' => 'اتصل بنا'],
                'group' => 'common',
                'description' => 'Navigation item',
            ],
            [
                'key' => 'common.lets_talk',
                'value' => ['en' => 'Let\'s Talk', 'ar' => 'لنتحدث'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.quick_links',
                'value' => ['en' => 'Quick Links', 'ar' => 'روابط سريعة'],
                'group' => 'common',
                'description' => 'Footer title',
            ],
            [
                'key' => 'common.contact_info',
                'value' => ['en' => 'Contact Info', 'ar' => 'معلومات الاتصال'],
                'group' => 'common',
                'description' => 'Footer title',
            ],
            [
                'key' => 'common.company_profile',
                'value' => ['en' => 'Company Profile', 'ar' => 'ملف الشركة'],
                'group' => 'common',
                'description' => 'Footer link',
            ],
            [
                'key' => 'common.follow_us',
                'value' => ['en' => 'Follow Us', 'ar' => 'تابعنا'],
                'group' => 'common',
                'description' => 'Footer text',
            ],
            [
                'key' => 'common.rights_reserved',
                'value' => ['en' => 'All rights reserved', 'ar' => 'جميع الحقوق محفوظة'],
                'group' => 'common',
                'description' => 'Footer text',
            ],
            [
                'key' => 'common.read_more',
                'value' => ['en' => 'Read More', 'ar' => 'اقرأ المزيد'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.learn_more',
                'value' => ['en' => 'Learn More', 'ar' => 'اعرف المزيد'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.view_all',
                'value' => ['en' => 'View All', 'ar' => 'عرض الكل'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.explore_services',
                'value' => ['en' => 'Explore Our Services', 'ar' => 'استكشف خدماتنا'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.our_services',
                'value' => ['en' => 'Our Services', 'ar' => 'خدماتنا'],
                'group' => 'common',
                'description' => 'Title',
            ],
            [
                'key' => 'common.search',
                'value' => ['en' => 'Search', 'ar' => 'بحث'],
                'group' => 'common',
                'description' => 'Label',
            ],
            [
                'key' => 'common.loading',
                'value' => ['en' => 'Loading...', 'ar' => 'جاري التحميل...'],
                'group' => 'common',
                'description' => 'Status text',
            ],
            [
                'key' => 'common.no_results',
                'value' => ['en' => 'No results found', 'ar' => 'لا توجد نتائج'],
                'group' => 'common',
                'description' => 'Status text',
            ],
            [
                'key' => 'common.submit',
                'value' => ['en' => 'Submit', 'ar' => 'إرسال'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.cancel',
                'value' => ['en' => 'Cancel', 'ar' => 'إلغاء'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.save',
                'value' => ['en' => 'Save', 'ar' => 'حفظ'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.delete',
                'value' => ['en' => 'Delete', 'ar' => 'حذف'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.edit',
                'value' => ['en' => 'Edit', 'ar' => 'تعديل'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.create',
                'value' => ['en' => 'Create', 'ar' => 'إنشاء'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.back',
                'value' => ['en' => 'Back', 'ar' => 'رجوع'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.next',
                'value' => ['en' => 'Next', 'ar' => 'التالي'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.previous',
                'value' => ['en' => 'Previous', 'ar' => 'السابق'],
                'group' => 'common',
                'description' => 'Button text',
            ],
            [
                'key' => 'common.back_to_projects',
                'value' => ['en' => 'Back to Projects', 'ar' => 'العودة إلى المشاريع'],
                'group' => 'common',
                'description' => 'Link text',
            ],
            [
                'key' => 'common.have_similar_project',
                'value' => ['en' => 'Have a Similar Project?', 'ar' => 'هل لديك مشروع مماثل؟'],
                'group' => 'common',
                'description' => 'CTA title',
            ],
            [
                'key' => 'common.contact_section_desc',
                'value' => [
                    'en' => 'Let us help you turn your ideas into reality. Contact us today to discuss your project.',
                    'ar' => 'دعنا نساعدك في تحويل أفكارك إلى واقع. اتصل بنا اليوم لمناقشة مشروعك.'
                ],
                'group' => 'common',
                'description' => 'CTA description',
            ],
            [
                'key' => 'common.get_in_touch',
                'value' => ['en' => 'Get in Touch', 'ar' => 'اتصل بنا'],
                'group' => 'common',
                'description' => 'CTA button',
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
