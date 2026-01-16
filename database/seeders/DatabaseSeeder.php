<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user for Filament
        $this->call([
            AdminUserSeeder::class,
            ServiceSeeder::class,
            ServiceItemSeeder::class,
            ProjectSeeder::class,
            BlogSeeder::class,
            PartnerSeeder::class,
            TeamSeeder::class,
            WorkingProcessSeeder::class,
            TargetFieldSeeder::class,
            TranslationSeeder::class,
            SettingSeeder::class,
        ]);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
