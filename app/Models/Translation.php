<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = [
        'key',
        'value',
        'group',
        'description',
    ];

    protected $casts = [
        'value' => 'array',
    ];

    /**
     * Get a translation value by key
     */
    public static function get(string $key, ?string $default = null, ?string $locale = null): ?string
    {
        $translation = static::where('key', $key)->first();
        
        if (!$translation) {
            // Fallback to language file
            $fallbackKey = str_replace('.', '_', $key);
            return __("common.{$fallbackKey}", [], $locale) !== "common.{$fallbackKey}" 
                ? __("common.{$fallbackKey}", [], $locale) 
                : ($default ?? $key);
        }

        $value = $translation->value;
        
        if (is_array($value)) {
            $locale = $locale ?? app()->getLocale();
            $fallback = config('app.fallback_locale', 'en');
            return $value[$locale] ?? $value[$fallback] ?? $default ?? $key;
        }

        return $value ?? $default ?? $key;
    }

    /**
     * Set or update a translation
     */
    public static function set(string $key, array $value, string $group = 'general', ?string $description = null): void
    {
        static::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'group' => $group,
                'description' => $description,
            ]
        );
    }
}
