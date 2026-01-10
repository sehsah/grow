<?php

namespace App\Helpers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingsHelper
{
    /**
     * Get site settings with caching
     */
    public static function site(string $key = null, $default = null)
    {
        if ($key === null) {
            // Return all site settings
            return Cache::remember('site_settings', 3600, function () {
                return [
                    'title' => Setting::getValue('site.title', ['en' => 'COMPACT', 'ar' => 'COMPACT']),
                    'logo' => Setting::getValue('site.logo', '/assets/logo-DSroQpd9.png'),
                    'address' => Setting::getValue('site.address', [
                        'en' => "Saudi Arabia Office\nWadi Makkah, King Khalid Road, Riyadh, Kingdom of Saudi Arabia – 12514\n\nEgypt Office\n63 Syria Street, Al Agouza, Giza, Egypt\n+2 010 980 52005",
                        'ar' => "مكتب السعودية\nوادي مكة، طريق الملك خالد، الرياض، المملكة العربية السعودية – 12514\n\nمكتب مصر\n63 شارع سوريا، العجوزة، الجيزة، مصر\n+2 010 980 52005"
                    ]),
                    'phone' => Setting::getValue('site.phone', ['en' => '+966 54 055 2004', 'ar' => '+966 54 055 2004']),
                    'phone_secondary' => Setting::getValue('site.phone_secondary', ['en' => '+966 56 442 6319', 'ar' => '+966 56 442 6319']),
                    'email' => Setting::getValue('site.email', ['en' => 'info@compactod.com', 'ar' => 'info@compactod.com']),
                ];
            });
        }

        $value = Setting::getValue("site.{$key}", $default);

        // If it's an array (multilingual), return translated string based on current locale
        if (is_array($value)) {
            $locale = app()->getLocale();
            $fallback = config('app.fallback_locale', 'en');
            return $value[$locale] ?? $value[$fallback] ?? '';
        }

        return $value;
    }

    /**
     * Clear settings cache (call this after updating settings)
     */
    public static function clearCache(): void
    {
        Cache::forget('site_settings');
    }
}
