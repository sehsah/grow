<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'name' => [
                    'en' => 'Yallagoom',
                    'ar' => 'يلاغوم',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367824956.png',
                'website_url' => 'https://www.yallagoom.com/ar/',
                'order' => 1,
                'is_active' => true,
                'description' => [
                    'en' => 'Yallagoom - Real Estate Platform',
                    'ar' => 'يلاغوم - منصة العقارات',
                ],
            ],
            [
                'name' => [
                    'en' => 'Rento',
                    'ar' => 'رينتو',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367220752.webp',
                'website_url' => 'https://rentocars.com/',
                'order' => 2,
                'is_active' => true,
                'description' => [
                    'en' => 'Rento - Car Rental Service',
                    'ar' => 'رينتو - خدمة تأجير السيارات',
                ],
            ],
            [
                'name' => [
                    'en' => 'Rabiah Garden Trading & Contracting',
                    'ar' => 'حديقة رابية للتجارة والمقاولات',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767366848382.jpg',
                'website_url' => 'https://rabiah.com.sa/',
                'order' => 3,
                'is_active' => true,
                'description' => [
                    'en' => 'Rabiah Garden Trading & Contracting',
                    'ar' => 'حديقة رابية للتجارة والمقاولات',
                ],
            ],
            [
                'name' => [
                    'en' => 'Kazdora',
                    'ar' => 'كازدورا',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367098549.webp',
                'website_url' => null,
                'order' => 4,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => [
                    'en' => 'Beta Egypt',
                    'ar' => 'بيتا مصر',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367125833.webp',
                'website_url' => null,
                'order' => 5,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => [
                    'en' => 'Businessway',
                    'ar' => 'بزنس واي',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367147116.webp',
                'website_url' => null,
                'order' => 6,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => [
                    'en' => 'SEC',
                    'ar' => 'SEC',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367396296.webp',
                'website_url' => 'https://www.se.com.sa/en',
                'order' => 7,
                'is_active' => true,
                'description' => [
                    'en' => 'Schneider Electric',
                    'ar' => 'شنايدر إلكتريك',
                ],
            ],
            [
                'name' => [
                    'en' => 'Cinnabon',
                    'ar' => 'سينابون',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367176198.webp',
                'website_url' => null,
                'order' => 8,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => [
                    'en' => 'Fitness Union',
                    'ar' => 'اتحاد اللياقة',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367317608.webp',
                'website_url' => 'https://fitnessunionsa.com/',
                'order' => 9,
                'is_active' => true,
                'description' => [
                    'en' => 'Fitness Union - Fitness Centers',
                    'ar' => 'اتحاد اللياقة - مراكز اللياقة البدنية',
                ],
            ],
            [
                'name' => [
                    'en' => 'PMT',
                    'ar' => 'PMT',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367294316.webp',
                'website_url' => null,
                'order' => 10,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => [
                    'en' => 'CipherSol',
                    'ar' => 'سايفر سول',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367443004.webp',
                'website_url' => 'https://ciphersol.com/',
                'order' => 11,
                'is_active' => true,
                'description' => [
                    'en' => 'CipherSol - Cybersecurity Solutions',
                    'ar' => 'سايفر سول - حلول الأمن السيبراني',
                ],
            ],
            [
                'name' => [
                    'en' => 'Matrix AI',
                    'ar' => 'ماتريكس AI',
                ],
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767368005279.png',
                'website_url' => 'https://matrixai.sa/',
                'order' => 12,
                'is_active' => true,
                'description' => [
                    'en' => 'Matrix AI - Artificial Intelligence Solutions',
                    'ar' => 'ماتريكس AI - حلول الذكاء الاصطناعي',
                ],
            ],
        ];

        // Clear existing partners
        Partner::query()->delete();

        foreach ($partners as $partnerData) {
            Partner::create($partnerData);
        }
    }
}
