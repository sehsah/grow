<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
        'description',
    ];

    protected $casts = [
        'value' => 'array', // Cast value to array for flexible storage
    ];

    /**
     * Get a setting value by key (returns raw value/array)
     */
    public static function getValue(string $key, $default = null)
    {
        $setting = static::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    /**
     * Set a setting value by key
     */
    public static function setValue(string $key, $value, string $type = 'text', string $group = 'general'): void
    {
        static::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'group' => $group,
            ]
        );
    }

    /**
     * Get a setting value by key with locale support
     */
    public static function getSetting(string $key, $default = null, ?string $locale = null): mixed
    {
        $setting = static::where('key', $key)->first();

        if (!$setting) {
            return $default;
        }

        $value = $setting->value;

        // If value is an array and locale is specified, return translated value
        if (is_array($value) && $locale !== null) {
            $fallback = config('app.fallback_locale', 'en');
            return $value[$locale] ?? $value[$fallback] ?? $default;
        }

        // If value is an array and no locale specified, use current locale
        if (is_array($value) && $locale === null) {
            $currentLocale = app()->getLocale();
            $fallback = config('app.fallback_locale', 'en');
            return $value[$currentLocale] ?? $value[$fallback] ?? $default;
        }

        return $value ?? $default;
    }
}
