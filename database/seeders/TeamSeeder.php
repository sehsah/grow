<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => [
                    'en' => 'Ahmed Hemdan',
                    'ar' => 'أحمد حمدان',
                ],
                'position' => [
                    'en' => 'CEO and Founder',
                    'ar' => 'الرئيس التنفيذي والمؤسس',
                ],
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/team-images/1767365666184.jpg',
                'bio' => [
                    'en' => 'Founder and CEO with extensive experience in business development and digital transformation.',
                    'ar' => 'مؤسس ورئيس تنفيذي يتمتع بخبرة واسعة في تطوير الأعمال والتحول الرقمي.',
                ],
                'email' => null,
                'linkedin_url' => null,
                'twitter_url' => null,
                'facebook_url' => null,
                'order' => 1,
                'is_active' => true,
            ],
        ];

        // Clear existing team members
        Team::query()->delete();
        
        foreach ($teams as $teamData) {
            Team::create($teamData);
        }
    }
}
