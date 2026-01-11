<?php

namespace App\Helpers;

use App\Models\Translation;
use Illuminate\Support\Facades\Cache;

class TranslationHelper
{
    /**
     * Get a translation value by key
     * Checks database first, then falls back to language files
     *
     * @param string $key Translation key (e.g., 'home.projects_title')
     * @param string|null $default Default value if translation not found
     * @param string|null $locale Locale to use (defaults to current locale)
     * @return string
     */
    public static function get(string $key, ?string $default = null, ?string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $cacheKey = "translation_{$key}_{$locale}";

        return Cache::remember($cacheKey, 3600, function () use ($key, $default, $locale) {
            // Try database first
            $translation = Translation::where('key', $key)->first();
            
            if ($translation && is_array($translation->value)) {
                $fallback = config('app.fallback_locale', 'en');
                return $translation->value[$locale] ?? $translation->value[$fallback] ?? $default ?? $key;
            }

            // Fallback to language file
            $fallbackKey = str_replace('.', '_', $key);
            $langKey = "common.{$fallbackKey}";
            $translated = __($langKey, [], $locale);
            
            // If translation exists in language file, return it
            if ($translated !== $langKey) {
                return $translated;
            }

            return $default ?? $key;
        });
    }

    /**
     * Clear translation cache
     */
    public static function clearCache(): void
    {
        Cache::flush(); // Or use a more specific cache tag if implemented
    }
}
