<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = config('app.admin_email', env('ADMIN_EMAIL', 'admin@example.com'));
        $name = config('app.admin_name', env('ADMIN_NAME', 'Admin User'));
        $password = config('app.admin_password', env('ADMIN_PASSWORD', 'password'));

        // Check if admin user already exists
        if (User::where('email', $email)->exists()) {
            $this->command->info("Admin user with email '{$email}' already exists!");
            $this->command->warn('To create a new admin user, delete the existing one or use a different email.');
            return;
        }

        // Create admin user
        User::create([
            'name' => $name,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => Hash::make($password),
            'remember_token' => Str::random(10),
        ]);

        $this->command->info('✓ Admin user created successfully!');
        $this->command->newLine();
        $this->command->info('Login credentials:');
        $this->command->line('  Email: ' . $email);
        $this->command->line('  Password: ' . $password);
        $this->command->newLine();
        $this->command->info('Access Filament admin panel at: /admin');
        $this->command->warn('⚠️  IMPORTANT: Change the default password after first login!');
    }
}
