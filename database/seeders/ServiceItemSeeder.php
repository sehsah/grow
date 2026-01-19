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

        $toTranslatableItems = function (array $itemsEn, ?array $itemsAr = null): array {
            $itemsAr = $itemsAr ?? $itemsEn;

            return [
                'en' => implode(', ', $itemsEn),
                'ar' => implode(', ', $itemsAr),
            ];
        };

        if ($organizational) {
            $organizational->serviceItems()->delete();

            $items = [
            [
                'icon' => 'services/items/business-consultancy.svg',
                'title' => ['en' => 'Business Consultancy', 'ar' => 'استشارات الأعمال'],
                'description' => [
                    'en' => 'Help organizations solve issues, create value, maximize growth and improve business performance.',
                    'ar' => 'مساعدة المؤسسات على حل المشكلات وخلق القيمة وتعظيم النمو وتحسين الأداء.',
                ],
                'items' => $toTranslatableItems([
                    'Expert advice, analysis and solutions',
                    'Business Plan development',
                    'Business process optimization',
                    'Work instructions creation',
                ]),
            ],
            [
                'icon' => 'services/items/corporate-training.svg',
                'title' => ['en' => 'Corporate Training', 'ar' => 'التدريب المؤسسي'],
                'description' => [
                    'en' => 'Providing professional development and training to employees in a corporate setting.',
                    'ar' => 'تقديم التطوير المهني والتدريب للموظفين في بيئة الشركات.',
                ],
                'items' => $toTranslatableItems([
                    'Increasing company productivity',
                    'Teaching new skills and knowledge',
                    'Leadership development programs',
                    'Team building workshops',
                ]),
            ],
            [
                'icon' => 'services/items/career-development.svg',
                'title' => ['en' => 'Career Development', 'ar' => 'تطوير المسار الوظيفي'],
                'description' => [
                    'en' => 'Comprehensive career development solutions for organizational growth.',
                    'ar' => 'حلول شاملة لتطوير المسار الوظيفي لنمو المؤسسة.',
                ],
                'items' => $toTranslatableItems([
                    'Employee career paths planning',
                    'Employees KPIs development',
                    'Job description creation',
                    'Performance appraisals system',
                ]),
            ],
            [
                'icon' => 'services/items/change-management.svg',
                'title' => ['en' => 'Change Management', 'ar' => 'إدارة التغيير'],
                'description' => [
                    'en' => 'Expert change management to navigate organizational transitions.',
                    'ar' => 'إدارة تغيير خبيرة لقيادة التحولات التنظيمية.',
                ],
                'items' => $toTranslatableItems([
                    'Planning and strategy development',
                    'Crafting change initiatives',
                    'Implementation support',
                    'Review & analysis of outcomes',
                ]),
            ],
            [
                'icon' => 'services/items/assessments-and-surveys.svg',
                'title' => ['en' => 'Assessments and Surveys', 'ar' => 'التقييمات والاستبيانات'],
                'description' => [
                    'en' => 'In-depth assessments and surveys for data-driven decisions.',
                    'ar' => 'تقييمات واستبيانات متعمقة لاتخاذ قرارات مبنية على البيانات.',
                ],
                'items' => $toTranslatableItems([
                    'Question management',
                    'Survey design and development',
                    'Distribution strategies',
                    'Evaluation & Reporting',
                ]),
            ],
            [
                'icon' => 'services/items/digital-transformation-consultancy.svg',
                'title' => ['en' => 'Digital Transformation Consultancy', 'ar' => 'استشارات التحول الرقمي'],
                'description' => [
                    'en' => 'Assist businesses in their digital transition efforts.',
                    'ar' => 'مساعدة الشركات في جهود التحول الرقمي.',
                ],
                'items' => $toTranslatableItems([
                    'Increase efficiency and competitiveness',
                    'Transitioning businesses to digital technology',
                    'Digital strategy development',
                    'Technology implementation support',
                ]),
            ],
            [
                'icon' => 'services/items/iso-consulting-and-certification.svg',
                'title' => ['en' => 'ISO Consulting & Certification', 'ar' => 'الاستشارات وشهادات ISO'],
                'description' => [
                    'en' => 'We help your businesses achieve ISO 9001 certification.',
                    'ar' => 'نساعد عملك على الحصول على شهادة ISO 9001.',
                ],
                'items' => $toTranslatableItems([
                    'ISO 9001 certification support',
                    'Tools and training for certification',
                    'Maintaining certification compliance',
                    'Quality management system implementation',
                ]),
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
                    'icon' => 'services/items/sales.svg',
                    'title' => ['en' => 'Sales', 'ar' => 'المبيعات'],
                    'description' => [
                        'en' => "We aid you in increasing your sales by actively listening and understanding the customers' needs.",
                        'ar' => 'نساعدك في زيادة المبيعات من خلال الاستماع الفعّال وفهم احتياجات العملاء.',
                    ],
                'items' => $toTranslatableItems([
                    'Sales action plan creation',
                    'Sales process creation',
                    'Team structure – territories strategies',
                    'Sales goals setting',
                    '+5 more',
                ]),
                ],
                [
                    'icon' => 'services/items/marketing.svg',
                    'title' => ['en' => 'Marketing', 'ar' => 'التسويق'],
                    'description' => [
                        'en' => "We help promote your business products and services to the targeted audience using service marketing strategies.",
                        'ar' => 'نساعد في الترويج لمنتجاتك وخدماتك للجمهور المستهدف باستخدام استراتيجيات تسويق الخدمات.',
                    ],
                'items' => $toTranslatableItems([
                    'SWOT analysis',
                    'Promotions management',
                    'Campaigns management',
                    'Online Marketing',
                    '+5 more',
                ]),
                ],
                [
                    'icon' => 'services/items/customer-services.svg',
                    'title' => ['en' => 'Customer Services', 'ar' => 'خدمات العملاء'],
                    'description' => [
                        'en' => 'Exceptional customer service that builds loyalty and satisfaction.',
                        'ar' => 'خدمة عملاء استثنائية تبني الولاء والرضا.',
                    ],
                'items' => $toTranslatableItems([
                    'Customer satisfaction KPIs',
                    'Customer complaints management',
                    'Customer communications through various channels',
                    'Customer interactions, transactions, comments, and complaints reports',
                ]),
                ],
                [
                    'icon' => 'services/items/social-media-care.svg',
                    'title' => ['en' => 'Social Media Care', 'ar' => 'رعاية وسائل التواصل الاجتماعي'],
                    'description' => [
                        'en' => "Developing and implementing marketing strategies for a business's social media platforms.",
                        'ar' => 'تطوير وتنفيذ استراتيجيات التسويق لمنصات التواصل الاجتماعي الخاصة بالأعمال.',
                    ],
                'items' => $toTranslatableItems([
                    'Creating social media profiles',
                    'Managing regular posts and responding to followers',
                    'Creating and managing content on all social media platforms',
                    'Building an audience and ensuring customer engagement',
                    '+2 more',
                ]),
                ],
                [
                    'icon' => 'services/items/chat-support.svg',
                    'title' => ['en' => 'Chat Support', 'ar' => 'دعم الدردشة'],
                    'description' => [
                        'en' => 'Prompt chat and email response to customers.',
                        'ar' => 'استجابة سريعة عبر الدردشة والبريد الإلكتروني للعملاء.',
                    ],
                'items' => $toTranslatableItems([
                    'Real-time customer assistance',
                    'Online chatbot management',
                    'Email support services',
                    'Multi-channel messaging support',
                ]),
                ],
                [
                    'icon' => 'services/items/telemarketing-telesales.svg',
                    'title' => ['en' => 'Telemarketing & Telesales', 'ar' => 'التسويق والبيع عبر الهاتف'],
                    'description' => [
                        'en' => 'Direct marketing of goods or services to potential customers over the telephone.',
                        'ar' => 'تسويق مباشر للسلع أو الخدمات للعملاء المحتملين عبر الهاتف.',
                    ],
                'items' => $toTranslatableItems([
                    'Contact potential and existing customers by phone',
                    'Inform customers of company products, services and offers',
                    'SMS marketing campaigns',
                    'Outbound calling services',
                ]),
                ],
                [
                    'icon' => 'services/items/customer-growth.svg',
                    'title' => ['en' => 'Customer Growth', 'ar' => 'نمو العملاء'],
                    'description' => [
                        'en' => 'We help our partners increase the rate of customer acquisition, retention, and revenue.',
                        'ar' => 'نساعد شركاءنا على زيادة معدلات اكتساب العملاء والاحتفاظ بهم والإيرادات.',
                    ],
                'items' => $toTranslatableItems([
                    'Optimizing products for growth',
                    'Inventing new marketing channels',
                    'Enable company growth and thrive',
                    'Maintain a healthy financial position within the marketplace',
                ]),
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
                    'icon' => 'services/items/talent-acquisition.svg',
                    'title' => ['en' => 'Talent Acquisition', 'ar' => 'اكتساب المواهب'],
                    'description' => [
                        'en' => null,
                        'ar' => null,
                    ],
                'items' => $toTranslatableItems([
                    'Organizing job fairs and recruitment events',
                    'Recruiting and attracting top candidates',
                    'Interview and Assessment',
                    'Evaluating and Selecting the best candidate(s)',
                    'Hiring and Onboarding',
                ]),
                ],
                [
                    'icon' => 'services/items/talent-development.svg',
                    'title' => ['en' => 'Talent Development', 'ar' => 'تطوير المواهب'],
                    'description' => [
                        'en' => null,
                        'ar' => null,
                    ],
                'items' => $toTranslatableItems([
                    'Designing and implementing training and development strategies',
                    'Programs focused on motivating, engaging, and educating a high-performing workforce',
                    'Building the knowledge, skills, and abilities of employees',
                    'Helping employees develop and achieve their potential',
                ]),
                ],
                [
                    'icon' => 'services/items/coaching-and-engagement.svg',
                    'title' => ['en' => 'Coaching and Engagement', 'ar' => 'التدريب والمشاركة'],
                    'description' => [
                        'en' => null,
                        'ar' => null,
                    ],
                'items' => $toTranslatableItems([
                    'Goal-setting support for employees',
                    'Personal growth and development programs',
                    'Behavior modification coaching',
                    'Employee engagement strategies',
                ]),
                ],
                [
                    'icon' => 'services/items/remote-operations-hosting.svg',
                    'title' => ['en' => 'Remote Operations Hosting', 'ar' => 'استضافة العمليات عن بُعد'],
                    'description' => [
                        'en' => null,
                        'ar' => null,
                    ],
                'items' => $toTranslatableItems([
                    'Remote team management and coordination',
                    'Virtual operations support',
                    'Distributed workforce solutions',
                    'Remote productivity optimization',
                ]),
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
                    'icon' => 'services/items/web-development.svg',
                    'title' => ['en' => 'Web Development', 'ar' => 'تطوير الويب'],
                    'description' => [
                        'en' => 'Custom web development solutions for all business needs.',
                        'ar' => 'حلول تطوير ويب مخصصة لجميع احتياجات الأعمال.',
                    ],
                    'items' => $toTranslatableItems([
                        'Single Page Website',
                        'Corporate Website',
                        'E-Commerce Website',
                        'User Interface (UI) Design',
                    ]),
                ],
                [
                    'icon' => 'services/items/mobile-app-development.svg',
                    'title' => ['en' => 'Mobile App Development', 'ar' => 'تطوير تطبيقات الجوال'],
                    'description' => [
                        'en' => 'Native and cross-platform mobile applications.',
                        'ar' => 'تطبيقات جوال أصلية وعبر الأنظمة.',
                    ],
                    'items' => $toTranslatableItems([
                        'Native App Development',
                        'iOS App Development',
                        'Android App Development',
                        'Cross-platform solutions',
                    ]),
                ],
                [
                    'icon' => 'services/items/web-hosting-services.svg',
                    'title' => ['en' => 'Web Hosting Services', 'ar' => 'خدمات استضافة الويب'],
                    'description' => [
                        'en' => 'Reliable and scalable hosting solutions.',
                        'ar' => 'حلول استضافة موثوقة وقابلة للتوسع.',
                    ],
                    'items' => $toTranslatableItems([
                        'Cloud Hosting',
                        'VPS Servers',
                        'Dedicated Servers',
                        'Custom Specs VDS',
                    ]),
                ],
                [
                    'icon' => 'services/items/user-experience-design.svg',
                    'title' => ['en' => 'User Experience (UX) Design', 'ar' => 'تصميم تجربة المستخدم'],
                    'description' => [
                        'en' => 'Creating intuitive and engaging user experiences.',
                        'ar' => 'إنشاء تجارب مستخدم بديهية وجذابة.',
                    ],
                    'items' => $toTranslatableItems([
                        'User research and analysis',
                        'Wireframing and prototyping',
                        'Usability testing',
                        'Interaction design',
                    ]),
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
