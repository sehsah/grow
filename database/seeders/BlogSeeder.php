<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => [
                    'en' => 'Business Development',
                    'ar' => 'تطوير الأعمال',
                ],
                'slug' => 'business-development',
                'excerpt' => [
                    'en' => 'How to Build Measurable Growth and Outperform Competitors with a Clear Roadmap',
                    'ar' => 'كيفية بناء نمو قابل للقياس والتفوق على المنافسين باستخدام خارطة طريق واضحة',
                ],
                'content' => [
                    'en' => 'How to Build Measurable Growth and Outperform Competitors with a Clear Roadmap. Learn proven strategies for business development that drive sustainable growth and competitive advantage.',
                    'ar' => 'كيفية بناء نمو قابل للقياس والتفوق على المنافسين باستخدام خارطة طريق واضحة. تعلم استراتيجيات مثبتة لتطوير الأعمال التي تقود النمو المستدام والميزة التنافسية.',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767360420954-jwbj1q.jpeg',
                'author' => [
                    'en' => 'COMPACT Team',
                    'ar' => 'فريق COMPACT',
                ],
                'published_at' => Carbon::parse('2026-01-02')->startOfDay(),
                'order' => 1,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Business Development: Build Measurable Growth',
                    'ar' => 'تطوير الأعمال: بناء نمو قابل للقياس',
                ],
                'meta_description' => [
                    'en' => 'Learn how to build measurable growth and outperform competitors with a clear business development roadmap.',
                    'ar' => 'تعلم كيفية بناء نمو قابل للقياس والتفوق على المنافسين باستخدام خارطة طريق واضحة لتطوير الأعمال.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Digital Transformation',
                    'ar' => 'التحول الرقمي',
                ],
                'slug' => 'digital-transformation',
                'excerpt' => [
                    'en' => 'How to Build a Smarter Operation and Achieve Measurable Growth',
                    'ar' => 'كيفية بناء عمليات أذكى وتحقيق نمو قابل للقياس',
                ],
                'content' => [
                    'en' => 'How to Build a Smarter Operation and Achieve Measurable Growth. Discover how digital transformation can revolutionize your business operations and drive sustainable growth.',
                    'ar' => 'كيفية بناء عمليات أذكى وتحقيق نمو قابل للقياس. اكتشف كيف يمكن للتحول الرقمي أن يحدث ثورة في عمليات عملك ويقود النمو المستدام.',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767359867700-fi12lf.jpg',
                'author' => [
                    'en' => 'COMPACT Team',
                    'ar' => 'فريق COMPACT',
                ],
                'published_at' => Carbon::parse('2026-01-02')->startOfDay(),
                'order' => 2,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Digital Transformation Guide',
                    'ar' => 'دليل التحول الرقمي',
                ],
                'meta_description' => [
                    'en' => 'Learn how to build a smarter operation and achieve measurable growth through digital transformation.',
                    'ar' => 'تعلم كيفية بناء عمليات أذكى وتحقيق نمو قابل للقياس من خلال التحول الرقمي.',
                ],
            ],
            [
                'title' => [
                    'en' => 'An Integrated Digital Marketing Agency Serving Businesses',
                    'ar' => 'وكالة تسويق رقمي متكاملة تخدم الشركات',
                ],
                'slug' => 'integrated-digital-marketing-agency',
                'excerpt' => [
                    'en' => 'Compact offers fully integrated 360° marketing services across a wide range of industries and business sectors.',
                    'ar' => 'تقدم Compact خدمات تسويق متكاملة بالكامل 360 درجة عبر مجموعة واسعة من الصناعات وقطاعات الأعمال.',
                ],
                'content' => [
                    'en' => 'Compact offers fully integrated 360° marketing services across a wide range of industries and business sectors. Our comprehensive approach ensures consistent messaging and maximum impact across all marketing channels.',
                    'ar' => 'تقدم Compact خدمات تسويق متكاملة بالكامل 360 درجة عبر مجموعة واسعة من الصناعات وقطاعات الأعمال. تضمن نهجنا الشامل رسالة متسقة وتأثيراً أقصى عبر جميع قنوات التسويق.',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767360764996-4yy3tf.jpeg',
                'author' => [
                    'en' => 'COMPACT Team',
                    'ar' => 'فريق COMPACT',
                ],
                'published_at' => Carbon::parse('2026-01-02')->startOfDay(),
                'order' => 3,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Integrated Digital Marketing Agency Services',
                    'ar' => 'خدمات وكالة التسويق الرقمي المتكاملة',
                ],
                'meta_description' => [
                    'en' => 'Learn about our fully integrated 360° marketing services for businesses.',
                    'ar' => 'تعرف على خدمات التسويق المتكاملة بالكامل 360 درجة للشركات.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Legal Consulting',
                    'ar' => 'الاستشارات القانونية',
                ],
                'slug' => 'legal-consulting',
                'excerpt' => [
                    'en' => 'How to Protect Your Business, Reduce Risk, and Sign Stronger Contracts with Confidence',
                    'ar' => 'كيفية حماية عملك وتقليل المخاطر والتوقيع على عقود أقوى بثقة',
                ],
                'content' => [
                    'en' => 'How to Protect Your Business, Reduce Risk, and Sign Stronger Contracts with Confidence. Expert legal consulting services to safeguard your business interests and ensure compliance.',
                    'ar' => 'كيفية حماية عملك وتقليل المخاطر والتوقيع على عقود أقوى بثقة. خدمات استشارات قانونية خبيرة لحماية مصالح عملك وضمان الامتثال.',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767364163367-fabass.jpeg',
                'author' => [
                    'en' => 'COMPACT Team',
                    'ar' => 'فريق COMPACT',
                ],
                'published_at' => Carbon::parse('2026-01-02')->startOfDay(),
                'order' => 4,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Legal Consulting for Business Protection',
                    'ar' => 'الاستشارات القانونية لحماية الأعمال',
                ],
                'meta_description' => [
                    'en' => 'Learn how to protect your business, reduce risk, and sign stronger contracts with confidence.',
                    'ar' => 'تعلم كيفية حماية عملك وتقليل المخاطر والتوقيع على عقود أقوى بثقة.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Financial Consulting',
                    'ar' => 'الاستشارات المالية',
                ],
                'slug' => 'financial-consulting',
                'excerpt' => [
                    'en' => 'How to Improve Profitability, Control Cash Flow, and Make Data-Driven Decisions',
                    'ar' => 'كيفية تحسين الربحية والتحكم في التدفق النقدي واتخاذ قرارات قائمة على البيانات',
                ],
                'content' => [
                    'en' => 'How to Improve Profitability, Control Cash Flow, and Make Data-Driven Decisions. Expert financial consulting to optimize your business performance and drive profitability.',
                    'ar' => 'كيفية تحسين الربحية والتحكم في التدفق النقدي واتخاذ قرارات قائمة على البيانات. استشارات مالية خبيرة لتحسين أداء عملك ودفع الربحية.',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767363487484-cnpenv.jpeg',
                'author' => [
                    'en' => 'COMPACT Team',
                    'ar' => 'فريق COMPACT',
                ],
                'published_at' => Carbon::parse('2026-01-02')->startOfDay(),
                'order' => 5,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Financial Consulting for Business Growth',
                    'ar' => 'الاستشارات المالية لنمو الأعمال',
                ],
                'meta_description' => [
                    'en' => 'Learn how to improve profitability, control cash flow, and make data-driven financial decisions.',
                    'ar' => 'تعلم كيفية تحسين الربحية والتحكم في التدفق النقدي واتخاذ قرارات مالية قائمة على البيانات.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Governance Solutions',
                    'ar' => 'حلول الحوكمة',
                ],
                'slug' => 'governance-solutions',
                'excerpt' => [
                    'en' => 'How to Protect Your Business, Improve Control, and Become Audit-Ready',
                    'ar' => 'كيفية حماية عملك وتحسين التحكم والاستعداد للتدقيق',
                ],
                'content' => [
                    'en' => 'How to Protect Your Business, Improve Control, and Become Audit-Ready. Comprehensive governance solutions to ensure compliance and operational excellence.',
                    'ar' => 'كيفية حماية عملك وتحسين التحكم والاستعداد للتدقيق. حلول حوكمة شاملة لضمان الامتثال والتميز التشغيلي.',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767363232957-ug3crn.jpeg',
                'author' => [
                    'en' => 'COMPACT Team',
                    'ar' => 'فريق COMPACT',
                ],
                'published_at' => Carbon::parse('2026-01-02')->startOfDay(),
                'order' => 6,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Governance Solutions for Business Compliance',
                    'ar' => 'حلول الحوكمة لامتثال الأعمال',
                ],
                'meta_description' => [
                    'en' => 'Learn how to protect your business, improve control, and become audit-ready with governance solutions.',
                    'ar' => 'تعلم كيفية حماية عملك وتحسين التحكم والاستعداد للتدقيق باستخدام حلول الحوكمة.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Websites & Mobile Apps Development',
                    'ar' => 'تطوير المواقع والتطبيقات المحمولة',
                ],
                'slug' => 'websites-mobile-apps-development',
                'excerpt' => [
                    'en' => 'Your Digital Appearance that tells your story',
                    'ar' => 'مظهرك الرقمي الذي يحكي قصتك',
                ],
                'content' => [
                    'en' => 'Your Digital Appearance that tells your story. Professional website and mobile app development services to create a compelling digital presence for your business.',
                    'ar' => 'مظهرك الرقمي الذي يحكي قصتك. خدمات تطوير مواقع ويب وتطبيقات محمولة احترافية لإنشاء حضور رقمي مقنع لعملك.',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767362825602-j0rgv.jpeg',
                'author' => [
                    'en' => 'COMPACT Team',
                    'ar' => 'فريق COMPACT',
                ],
                'published_at' => Carbon::parse('2026-01-02')->startOfDay(),
                'order' => 7,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Websites & Mobile Apps Development Services',
                    'ar' => 'خدمات تطوير المواقع والتطبيقات المحمولة',
                ],
                'meta_description' => [
                    'en' => 'Professional website and mobile app development to create your digital presence.',
                    'ar' => 'تطوير مواقع ويب وتطبيقات محمولة احترافية لإنشاء حضورك الرقمي.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Recruitment & Training',
                    'ar' => 'التوظيف والتدريب',
                ],
                'slug' => 'recruitment-training',
                'excerpt' => [
                    'en' => 'How to Build a High-Performing Team and Reduce Turnover Costs',
                    'ar' => 'كيفية بناء فريق عالي الأداء وتقليل تكاليف دوران الموظفين',
                ],
                'content' => [
                    'en' => 'How to Build a High-Performing Team and Reduce Turnover Costs. Expert recruitment and training services to build and maintain a competitive workforce.',
                    'ar' => 'كيفية بناء فريق عالي الأداء وتقليل تكاليف دوران الموظفين. خدمات توظيف وتدريب خبيرة لبناء والحفاظ على قوة عاملة تنافسية.',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767362629040-vfrba.jpeg',
                'author' => [
                    'en' => 'COMPACT Team',
                    'ar' => 'فريق COMPACT',
                ],
                'published_at' => Carbon::parse('2026-01-02')->startOfDay(),
                'order' => 8,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => [
                    'en' => 'Recruitment & Training Solutions',
                    'ar' => 'حلول التوظيف والتدريب',
                ],
                'meta_description' => [
                    'en' => 'Learn how to build a high-performing team and reduce turnover costs through effective recruitment and training.',
                    'ar' => 'تعلم كيفية بناء فريق عالي الأداء وتقليل تكاليف دوران الموظفين من خلال التوظيف والتدريب الفعال.',
                ],
            ],
        ];

        // Clear existing blogs
        Blog::query()->delete();

        foreach ($blogs as $blogData) {
            Blog::create($blogData);
        }
    }
}
