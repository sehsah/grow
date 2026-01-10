<?php

namespace App\Traits;

trait HasTranslations
{
    /**
     * Get the translation value for a given attribute and locale
     */
    public function getTranslation(string $attribute, ?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        $fallbackLocale = config('app.fallback_locale', 'en');
        
        $value = $this->attributes[$attribute] ?? null;
        
        if ($value && is_string($value)) {
            $decoded = json_decode($value, true);
            if (is_array($decoded)) {
                return $decoded[$locale] ?? $decoded[$fallbackLocale] ?? null;
            }
            return $value;
        }
        
        if (is_array($value)) {
            return $value[$locale] ?? $value[$fallbackLocale] ?? null;
        }
        
        return $value;
    }

    /**
     * Set the translation value for a given attribute and locale
     */
    public function setTranslation(string $attribute, string $locale, ?string $value): void
    {
        $current = $this->attributes[$attribute] ?? null;
        
        if ($current && is_string($current)) {
            $translations = json_decode($current, true) ?? [];
        } else {
            $translations = is_array($current) ? $current : [];
        }
        
        $translations[$locale] = $value;
        $this->setAttribute($attribute, $translations);
    }

    /**
     * Get all translations for a given attribute
     */
    public function getTranslations(string $attribute): array
    {
        $value = $this->attributes[$attribute] ?? null;
        
        if ($value && is_string($value)) {
            $decoded = json_decode($value, true);
            return is_array($decoded) ? $decoded : [];
        }
        
        return is_array($value) ? $value : [];
    }

    /**
     * Get raw JSON value for a translatable attribute
     */
    public function getTranslatableRaw(string $attribute): array
    {
        return $this->getTranslations($attribute);
    }
}
