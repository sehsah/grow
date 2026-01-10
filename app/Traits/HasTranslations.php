<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait HasTranslations
{
    /**
     * Get the translatable attributes for this model.
     * Override this in your model to specify which attributes are translatable.
     */
    public function getTranslatableAttributes(): array
    {
        return $this->translatable ?? [];
    }

    /**
     * Get the translation value for a given attribute and locale
     */
    public function getTranslation(string $attribute, ?string $locale = null): ?string
    {
        $locale = $locale ?? App::getLocale();
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

    /**
     * Override Eloquent's getAttribute to return translated string for translatable attributes
     */
    public function getAttribute($key)
    {
        $translatableAttributes = $this->getTranslatableAttributes();

        // Check if this is a translatable attribute and we're accessing it directly (not as array)
        if (in_array($key, $translatableAttributes)) {
            // Get the parent value first (this will get the casted value)
            $value = parent::getAttribute($key);

            // If it's an array (after cast), return the translated string
            if (is_array($value)) {
                $locale = App::getLocale();
                $fallbackLocale = config('app.fallback_locale', 'en');
                return $value[$locale] ?? $value[$fallbackLocale] ?? '';
            }

            // If it's a JSON string (raw from database), decode and return translated string
            if (is_string($value)) {
                $decoded = json_decode($value, true);
                if (is_array($decoded)) {
                    $locale = App::getLocale();
                    $fallbackLocale = config('app.fallback_locale', 'en');
                    return $decoded[$locale] ?? $decoded[$fallbackLocale] ?? '';
                }
                // If not JSON, return as-is
                return $value;
            }

            return $value;
        }

        return parent::getAttribute($key);
    }

    /**
     * Get the raw array value for a translatable attribute (bypass translation)
     */
    public function getRaw(string $attribute): array
    {
        $value = $this->attributes[$attribute] ?? null;

        if (is_string($value)) {
            $decoded = json_decode($value, true);
            return is_array($decoded) ? $decoded : [];
        }

        return is_array($value) ? $value : [];
    }

    /**
     * Get the translated attribute as a string (alias for easier access)
     */
    public function trans(string $attribute, ?string $locale = null): ?string
    {
        return $this->getTranslation($attribute, $locale);
    }

    /**
     * Get the translated attribute in a specific locale
     */
    public function transIn(string $attribute, string $locale): ?string
    {
        return $this->getTranslation($attribute, $locale);
    }
}
