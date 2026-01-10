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
                'name' => 'Ahmed Hemdan',
                'position' => 'CEO and Founder',
                'image' => 'https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/team-images/1767365666184.jpg',
                'bio' => 'Founder and CEO with extensive experience in business development and digital transformation.',
                'email' => null,
                'linkedin_url' => null,
                'twitter_url' => null,
                'order' => 1,
                'is_active' => true,
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
