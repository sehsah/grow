<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceItem;
use Illuminate\Database\Seeder;

class ServiceItemSeeder extends Seeder
{
    public function run(): void
    {
        $organizational = Service::where('slug', 'organizational-development')->first();
        $crm = Service::where('slug', 'crm')->first();

        if ($organizational) {
            $organizational->serviceItems()->delete();

            $items = [
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open w-7 h-7 text-primary"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg>',
                'title' => ['en' => 'Business Consultancy', 'ar' => 'استشارات الأعمال'],
                'description' => [
                    'en' => 'Help organizations solve issues, create value, maximize growth and improve business performance.',
                    'ar' => 'مساعدة المؤسسات على حل المشكلات وخلق القيمة وتعظيم النمو وتحسين الأداء.',
                ],
                'items' => [
                    'Expert advice, analysis and solutions',
                    'Business Plan development',
                    'Business process optimization',
                    'Work instructions creation',
                ],
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-7 h-7 text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                'title' => ['en' => 'Corporate Training', 'ar' => 'التدريب المؤسسي'],
                'description' => [
                    'en' => 'Providing professional development and training to employees in a corporate setting.',
                    'ar' => 'تقديم التطوير المهني والتدريب للموظفين في بيئة الشركات.',
                ],
                'items' => [
                    'Increasing company productivity',
                    'Teaching new skills and knowledge',
                    'Leadership development programs',
                    'Team building workshops',
                ],
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase w-7 h-7 text-primary"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect width="20" height="14" x="2" y="6" rx="2"></rect></svg>',
                'title' => ['en' => 'Career Development', 'ar' => 'تطوير المسار الوظيفي'],
                'description' => [
                    'en' => 'Comprehensive career development solutions for organizational growth.',
                    'ar' => 'حلول شاملة لتطوير المسار الوظيفي لنمو المؤسسة.',
                ],
                'items' => [
                    'Employee career paths planning',
                    'Employees KPIs development',
                    'Job description creation',
                    'Performance appraisals system',
                ],
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-7 h-7 text-primary"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path></svg>',
                'title' => ['en' => 'Change Management', 'ar' => 'إدارة التغيير'],
                'description' => [
                    'en' => 'Expert change management to navigate organizational transitions.',
                    'ar' => 'إدارة تغيير خبيرة لقيادة التحولات التنظيمية.',
                ],
                'items' => [
                    'Planning and strategy development',
                    'Crafting change initiatives',
                    'Implementation support',
                    'Review & analysis of outcomes',
                ],
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-check w-7 h-7 text-primary"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="m9 14 2 2 4-4"></path></svg>',
                'title' => ['en' => 'Assessments and Surveys', 'ar' => 'التقييمات والاستبيانات'],
                'description' => [
                    'en' => 'In-depth assessments and surveys for data-driven decisions.',
                    'ar' => 'تقييمات واستبيانات متعمقة لاتخاذ قرارات مبنية على البيانات.',
                ],
                'items' => [
                    'Question management',
                    'Survey design and development',
                    'Distribution strategies',
                    'Evaluation & Reporting',
                ],
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-laptop w-7 h-7 text-primary"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path></svg>',
                'title' => ['en' => 'Digital Transformation Consultancy', 'ar' => 'استشارات التحول الرقمي'],
                'description' => [
                    'en' => 'Assist businesses in their digital transition efforts.',
                    'ar' => 'مساعدة الشركات في جهود التحول الرقمي.',
                ],
                'items' => [
                    'Increase efficiency and competitiveness',
                    'Transitioning businesses to digital technology',
                    'Digital strategy development',
                    'Technology implementation support',
                ],
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-7 h-7 text-primary"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>',
                'title' => ['en' => 'ISO Consulting & Certification', 'ar' => 'الاستشارات وشهادات ISO'],
                'description' => [
                    'en' => 'We help your businesses achieve ISO 9001 certification.',
                    'ar' => 'نساعد عملك على الحصول على شهادة ISO 9001.',
                ],
                'items' => [
                    'ISO 9001 certification support',
                    'Tools and training for certification',
                    'Maintaining certification compliance',
                    'Quality management system implementation',
                ],
            ],
        ];

            foreach ($items as $item) {
                ServiceItem::create([
                    'service_id' => $organizational->id,
                    'icon' => $item['icon'],
                    'title' => $item['title'],
                    'subtitle' => $item['title'], // no distinct subtitle; mirror title for now
                    'description' => $item['description'],
                    'items' => $item['items'],
                ]);
            }
        }

        if ($crm) {
            $crm->serviceItems()->delete();

            $crmItems = [
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-7 h-7 text-primary"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>',
                    'title' => ['en' => 'Sales', 'ar' => 'المبيعات'],
                    'description' => [
                        'en' => "We aid you in increasing your sales by actively listening and understanding the customers' needs.",
                        'ar' => 'نساعدك في زيادة المبيعات من خلال الاستماع الفعّال وفهم احتياجات العملاء.',
                    ],
                    'items' => [
                        'Sales action plan creation',
                        'Sales process creation',
                        'Team structure – territories strategies',
                        'Sales goals setting',
                        '+5 more',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-megaphone w-7 h-7 text-primary"><path d="m3 11 18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path></svg>',
                    'title' => ['en' => 'Marketing', 'ar' => 'التسويق'],
                    'description' => [
                        'en' => "We help promote your business products and services to the targeted audience using service marketing strategies.",
                        'ar' => 'نساعد في الترويج لمنتجاتك وخدماتك للجمهور المستهدف باستخدام استراتيجيات تسويق الخدمات.',
                    ],
                    'items' => [
                        'SWOT analysis',
                        'Promotions management',
                        'Campaigns management',
                        'Online Marketing',
                        '+5 more',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-headphones w-7 h-7 text-primary"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>',
                    'title' => ['en' => 'Customer Services', 'ar' => 'خدمات العملاء'],
                    'description' => [
                        'en' => 'Exceptional customer service that builds loyalty and satisfaction.',
                        'ar' => 'خدمة عملاء استثنائية تبني الولاء والرضا.',
                    ],
                    'items' => [
                        'Customer satisfaction KPIs',
                        'Customer complaints management',
                        'Customer communications through various channels',
                        'Customer interactions, transactions, comments, and complaints reports',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-7 h-7 text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                    'title' => ['en' => 'Social Media Care', 'ar' => 'رعاية وسائل التواصل الاجتماعي'],
                    'description' => [
                        'en' => "Developing and implementing marketing strategies for a business's social media platforms.",
                        'ar' => 'تطوير وتنفيذ استراتيجيات التسويق لمنصات التواصل الاجتماعي الخاصة بالأعمال.',
                    ],
                    'items' => [
                        'Creating social media profiles',
                        'Managing regular posts and responding to followers',
                        'Creating and managing content on all social media platforms',
                        'Building an audience and ensuring customer engagement',
                        '+2 more',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle w-7 h-7 text-primary"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path></svg>',
                    'title' => ['en' => 'Chat Support', 'ar' => 'دعم الدردشة'],
                    'description' => [
                        'en' => 'Prompt chat and email response to customers.',
                        'ar' => 'استجابة سريعة عبر الدردشة والبريد الإلكتروني للعملاء.',
                    ],
                    'items' => [
                        'Real-time customer assistance',
                        'Online chatbot management',
                        'Email support services',
                        'Multi-channel messaging support',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-7 h-7 text-primary"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
                    'title' => ['en' => 'Telemarketing & Telesales', 'ar' => 'التسويق والبيع عبر الهاتف'],
                    'description' => [
                        'en' => 'Direct marketing of goods or services to potential customers over the telephone.',
                        'ar' => 'تسويق مباشر للسلع أو الخدمات للعملاء المحتملين عبر الهاتف.',
                    ],
                    'items' => [
                        'Contact potential and existing customers by phone',
                        'Inform customers of company products, services and offers',
                        'SMS marketing campaigns',
                        'Outbound calling services',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus w-7 h-7 text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><line x1="19" x2="19" y1="8" y2="14"></line><line x1="22" x2="16" y1="11" y2="11"></line></svg>',
                    'title' => ['en' => 'Customer Growth', 'ar' => 'نمو العملاء'],
                    'description' => [
                        'en' => 'We help our partners increase the rate of customer acquisition, retention, and revenue.',
                        'ar' => 'نساعد شركاءنا على زيادة معدلات اكتساب العملاء والاحتفاظ بهم والإيرادات.',
                    ],
                    'items' => [
                        'Optimizing products for growth',
                        'Inventing new marketing channels',
                        'Enable company growth and thrive',
                        'Maintain a healthy financial position within the marketplace',
                    ],
                ],
            ];

            foreach ($crmItems as $item) {
                ServiceItem::create([
                    'service_id' => $crm->id,
                    'icon' => $item['icon'],
                    'title' => $item['title'],
                    'subtitle' => $item['title'],
                    'description' => $item['description'],
                    'items' => $item['items'],
                ]);
            }
        }

        if ($outsourcing = Service::where('slug', 'outsourcing')->first()) {
            $outsourcing->serviceItems()->delete();

            $outsourcingItems = [
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-check w-7 h-7 text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><polyline points="16 11 18 13 22 9"></polyline></svg>',
                    'title' => ['en' => 'Talent Acquisition', 'ar' => 'اكتساب المواهب'],
                    'description' => [
                        'en' => null,
                        'ar' => null,
                    ],
                    'items' => [
                        'Organizing job fairs and recruitment events',
                        'Recruiting and attracting top candidates',
                        'Interview and Assessment',
                        'Evaluating and Selecting the best candidate(s)',
                        'Hiring and Onboarding',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap w-7 h-7 text-primary"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>',
                    'title' => ['en' => 'Talent Development', 'ar' => 'تطوير المواهب'],
                    'description' => [
                        'en' => null,
                        'ar' => null,
                    ],
                    'items' => [
                        'Designing and implementing training and development strategies',
                        'Programs focused on motivating, engaging, and educating a high-performing workforce',
                        'Building the knowledge, skills, and abilities of employees',
                        'Helping employees develop and achieve their potential',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-7 h-7 text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                    'title' => ['en' => 'Coaching and Engagement', 'ar' => 'التدريب والمشاركة'],
                    'description' => [
                        'en' => null,
                        'ar' => null,
                    ],
                    'items' => [
                        'Goal-setting support for employees',
                        'Personal growth and development programs',
                        'Behavior modification coaching',
                        'Employee engagement strategies',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-7 h-7 text-primary"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>',
                    'title' => ['en' => 'Remote Operations Hosting', 'ar' => 'استضافة العمليات عن بُعد'],
                    'description' => [
                        'en' => null,
                        'ar' => null,
                    ],
                    'items' => [
                        'Remote team management and coordination',
                        'Virtual operations support',
                        'Distributed workforce solutions',
                        'Remote productivity optimization',
                    ],
                ],
            ];

            foreach ($outsourcingItems as $item) {
                ServiceItem::create([
                    'service_id' => $outsourcing->id,
                    'icon' => $item['icon'],
                    'title' => $item['title'],
                    'subtitle' => $item['title'],
                    'description' => $item['description'],
                    'items' => $item['items'],
                ]);
            }
        }

        if ($itDev = Service::where('slug', 'it-development')->first()) {
            $itDev->serviceItems()->delete();

            $itDevItems = [
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-7 h-7 text-primary"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>',
                    'title' => ['en' => 'Web Development', 'ar' => 'تطوير الويب'],
                    'description' => [
                        'en' => 'Custom web development solutions for all business needs.',
                        'ar' => 'حلول تطوير ويب مخصصة لجميع احتياجات الأعمال.',
                    ],
                    'items' => [
                        'Single Page Website',
                        'Corporate Website',
                        'E-Commerce Website',
                        'User Interface (UI) Design',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone w-7 h-7 text-primary"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg>',
                    'title' => ['en' => 'Mobile App Development', 'ar' => 'تطوير تطبيقات الجوال'],
                    'description' => [
                        'en' => 'Native and cross-platform mobile applications.',
                        'ar' => 'تطبيقات جوال أصلية وعبر الأنظمة.',
                    ],
                    'items' => [
                        'Native App Development',
                        'iOS App Development',
                        'Android App Development',
                        'Cross-platform solutions',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server w-7 h-7 text-primary"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"></rect><rect width="20" height="8" x="2" y="14" rx="2" ry="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line></svg>',
                    'title' => ['en' => 'Web Hosting Services', 'ar' => 'خدمات استضافة الويب'],
                    'description' => [
                        'en' => 'Reliable and scalable hosting solutions.',
                        'ar' => 'حلول استضافة موثوقة وقابلة للتوسع.',
                    ],
                    'items' => [
                        'Cloud Hosting',
                        'VPS Servers',
                        'Dedicated Servers',
                        'Custom Specs VDS',
                    ],
                ],
                [
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-palette w-7 h-7 text-primary"><circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"></path></svg>',
                    'title' => ['en' => 'User Experience (UX) Design', 'ar' => 'تصميم تجربة المستخدم'],
                    'description' => [
                        'en' => 'Creating intuitive and engaging user experiences.',
                        'ar' => 'إنشاء تجارب مستخدم بديهية وجذابة.',
                    ],
                    'items' => [
                        'User research and analysis',
                        'Wireframing and prototyping',
                        'Usability testing',
                        'Interaction design',
                    ],
                ],
            ];

            foreach ($itDevItems as $item) {
                ServiceItem::create([
                    'service_id' => $itDev->id,
                    'icon' => $item['icon'],
                    'title' => $item['title'],
                    'subtitle' => $item['title'],
                    'description' => $item['description'],
                    'items' => $item['items'],
                ]);
            }
        }
    }
}
