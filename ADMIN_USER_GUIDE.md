# Filament Admin User Guide

## ✅ Admin User Created Successfully!

An admin user has been created for Filament. You can now log in to the admin panel.

### Default Credentials

- **Email:** `admin@example.com`
- **Password:** `password`
- **Admin Panel URL:** `/admin`

### 🚨 Important Security Note

**Please change the default password immediately after first login!**

## Customizing Admin Credentials

You can customize the admin user credentials by adding these to your `.env` file:

```env
ADMIN_EMAIL=your-email@example.com
ADMIN_NAME=Your Name
ADMIN_PASSWORD=your-secure-password
```

Then run the seeder again:
```bash
php artisan db:seed --class=AdminUserSeeder
```

**Note:** The seeder checks if a user with that email already exists, so it won't create duplicates.

## Accessing the Admin Panel

1. Start your Laravel server:
   ```bash
   php artisan serve
   ```

2. Navigate to:
   ```
   http://localhost:8000/admin
   ```

3. Log in with your credentials

## Creating Additional Admin Users

### Method 1: Using Filament (after login)
1. Log in to `/admin`
2. Navigate to Users section (if you have a User resource)
3. Create a new user

### Method 2: Using Seeder
1. Update `.env` with new credentials
2. Run: `php artisan db:seed --class=AdminUserSeeder`

### Method 3: Using Tinker
```bash
php artisan tinker
```

Then in tinker:
```php
$user = App\Models\User::create([
    'name' => 'New Admin',
    'email' => 'newadmin@example.com',
    'password' => Hash::make('secure-password'),
    'email_verified_at' => now(),
]);
```

### Method 4: Using Database Directly
```bash
php artisan tinker
```

```php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

User::create([
    'name' => 'Admin Name',
    'email' => 'admin@example.com',
    'password' => Hash::make('your-password'),
    'email_verified_at' => now(),
]);
```

## Troubleshooting

### "Admin user already exists" error
- The seeder won't create duplicate users
- Delete the existing user or use a different email in `.env`

### Cannot access /admin
- Make sure Filament is installed: `composer require filament/filament`
- Check that `AdminPanelProvider` is registered in `bootstrap/providers.php`
- Clear cache: `php artisan optimize:clear`

### Password not working
- Verify the user exists: `php artisan tinker` → `App\Models\User::first()`
- Reset password using tinker:
  ```php
  $user = App\Models\User::where('email', 'admin@example.com')->first();
  $user->password = Hash::make('new-password');
  $user->save();
  ```

## Seeder Location

The admin user seeder is located at:
- `database/seeders/AdminUserSeeder.php`
- Automatically called in `database/seeders/DatabaseSeeder.php`

## Next Steps

1. ✅ Log in to `/admin` with the credentials above
2. ✅ Change your password in the user profile
3. ✅ Start creating your content resources in Filament
4. ✅ Customize the admin panel as needed

Enjoy using Filament! 🎉
