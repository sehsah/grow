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
                'title' => 'Business Development',
                'slug' => 'business-development',
                'excerpt' => 'How to Build Measurable Growth and Outperform Competitors with a Clear Roadmap',
                'content' => 'How to Build Measurable Growth and Outperform Competitors with a Clear Roadmap. Learn proven strategies for business development that drive sustainable growth and competitive advantage.',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767360420954-jwbj1q.jpeg',
                'author' => 'COMPACT Team',
                'published_at' => Carbon::parse('2026-01-02'),
                'read_time' => 5,
                'order' => 1,
                'is_featured' => true,
                'is_active' => true,
                'meta_title' => 'Business Development: Build Measurable Growth',
                'meta_description' => 'Learn how to build measurable growth and outperform competitors with a clear business development roadmap.',
            ],
            [
                'title' => 'Digital Transformation',
                'slug' => 'digital-transformation',
                'excerpt' => 'How to Build a Smarter Operation and Achieve Measurable Growth',
                'content' => 'How to Build a Smarter Operation and Achieve Measurable Growth. Discover how digital transformation can revolutionize your business operations and drive sustainable growth.',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767359867700-fi12lf.jpg',
                'author' => 'COMPACT Team',
                'published_at' => Carbon::parse('2026-01-02'),
                'read_time' => 5,
                'order' => 2,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => 'Digital Transformation Guide',
                'meta_description' => 'Learn how to build a smarter operation and achieve measurable growth through digital transformation.',
            ],
            [
                'title' => 'An Integrated Digital Marketing Agency Serving Businesses',
                'slug' => 'integrated-digital-marketing-agency',
                'excerpt' => 'Compact offers fully integrated 360° marketing services across a wide range of industries and business sectors.',
                'content' => 'Compact offers fully integrated 360° marketing services across a wide range of industries and business sectors. Our comprehensive approach ensures consistent messaging and maximum impact across all marketing channels.',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767360764996-4yy3tf.jpeg',
                'author' => 'COMPACT Team',
                'published_at' => Carbon::parse('2026-01-02'),
                'read_time' => 5,
                'order' => 3,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => 'Integrated Digital Marketing Agency Services',
                'meta_description' => 'Learn about our fully integrated 360° marketing services for businesses.',
            ],
            [
                'title' => 'Legal Consulting',
                'slug' => 'legal-consulting',
                'excerpt' => 'How to Protect Your Business, Reduce Risk, and Sign Stronger Contracts with Confidence',
                'content' => 'How to Protect Your Business, Reduce Risk, and Sign Stronger Contracts with Confidence. Expert legal consulting services to safeguard your business interests and ensure compliance.',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767364163367-fabass.jpeg',
                'author' => 'COMPACT Team',
                'published_at' => Carbon::parse('2026-01-02'),
                'read_time' => 5,
                'order' => 4,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => 'Legal Consulting for Business Protection',
                'meta_description' => 'Learn how to protect your business, reduce risk, and sign stronger contracts with confidence.',
            ],
            [
                'title' => 'Financial Consulting',
                'slug' => 'financial-consulting',
                'excerpt' => 'How to Improve Profitability, Control Cash Flow, and Make Data-Driven Decisions',
                'content' => 'How to Improve Profitability, Control Cash Flow, and Make Data-Driven Decisions. Expert financial consulting to optimize your business performance and drive profitability.',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767363487484-cnpenv.jpeg',
                'author' => 'COMPACT Team',
                'published_at' => Carbon::parse('2026-01-02'),
                'read_time' => 5,
                'order' => 5,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => 'Financial Consulting for Business Growth',
                'meta_description' => 'Learn how to improve profitability, control cash flow, and make data-driven financial decisions.',
            ],
            [
                'title' => 'Governance Solutions',
                'slug' => 'governance-solutions',
                'excerpt' => 'How to Protect Your Business, Improve Control, and Become Audit-Ready',
                'content' => 'How to Protect Your Business, Improve Control, and Become Audit-Ready. Comprehensive governance solutions to ensure compliance and operational excellence.',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767363232957-ug3crn.jpeg',
                'author' => 'COMPACT Team',
                'published_at' => Carbon::parse('2026-01-02'),
                'read_time' => 5,
                'order' => 6,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => 'Governance Solutions for Business Compliance',
                'meta_description' => 'Learn how to protect your business, improve control, and become audit-ready with governance solutions.',
            ],
            [
                'title' => 'Websites & Mobile Apps Development',
                'slug' => 'websites-mobile-apps-development',
                'excerpt' => 'Your Digital Appearance that tells your story',
                'content' => 'Your Digital Appearance that tells your story. Professional website and mobile app development services to create a compelling digital presence for your business.',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767362825602-j0rgv.jpeg',
                'author' => 'COMPACT Team',
                'published_at' => Carbon::parse('2026-01-02'),
                'read_time' => 5,
                'order' => 7,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => 'Websites & Mobile Apps Development Services',
                'meta_description' => 'Professional website and mobile app development to create your digital presence.',
            ],
            [
                'title' => 'Recruitment & Training',
                'slug' => 'recruitment-training',
                'excerpt' => 'How to Build a High-Performing Team and Reduce Turnover Costs',
                'content' => 'How to Build a High-Performing Team and Reduce Turnover Costs. Expert recruitment and training services to build and maintain a competitive workforce.',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767362629040-vfrba.jpeg',
                'author' => 'COMPACT Team',
                'published_at' => Carbon::parse('2026-01-02'),
                'read_time' => 5,
                'order' => 8,
                'is_featured' => false,
                'is_active' => true,
                'meta_title' => 'Recruitment & Training Solutions',
                'meta_description' => 'Learn how to build a high-performing team and reduce turnover costs through effective recruitment and training.',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
