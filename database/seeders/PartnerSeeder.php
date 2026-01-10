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
                'name' => 'Yallagoom',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367824956.png',
                'website_url' => 'https://www.yallagoom.com/ar/',
                'order' => 1,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'Rento',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367220752.webp',
                'website_url' => 'https://rentocars.com/',
                'order' => 2,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'Rabiah Garden Trading & Contracting',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767366848382.jpg',
                'website_url' => 'https://rabiah.com.sa/',
                'order' => 3,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'Kazdora',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367098549.webp',
                'website_url' => null,
                'order' => 4,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'Beta Egypt',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367125833.webp',
                'website_url' => null,
                'order' => 5,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'Businessway',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367147116.webp',
                'website_url' => null,
                'order' => 6,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'SEC',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367396296.webp',
                'website_url' => 'https://www.se.com.sa/en',
                'order' => 7,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'Cinnabon',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367176198.webp',
                'website_url' => null,
                'order' => 8,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'Fitness Union',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367317608.webp',
                'website_url' => 'https://fitnessunionsa.com/',
                'order' => 9,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'PMT',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367294316.webp',
                'website_url' => null,
                'order' => 10,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'CipherSol',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767367443004.webp',
                'website_url' => 'https://ciphersol.com/',
                'order' => 11,
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'Matrix AI',
                'logo' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/partner-logos/1767368005279.png',
                'website_url' => 'https://matrixai.sa/',
                'order' => 12,
                'is_active' => true,
                'description' => null,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
