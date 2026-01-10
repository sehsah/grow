<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'category',
        'icon',
        'image',
        'order',
        'is_featured',
        'is_active',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'title' => 'array',
        'short_description' => 'array',
        'description' => 'array',
        'category' => 'array',
        'meta_title' => 'array',
        'meta_description' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            if (empty($service->slug)) {
                // Use English title for slug generation
                $title = is_array($service->title) ? ($service->title['en'] ?? reset($service->title)) : $service->title;
                $service->slug = Str::slug($title);
            }
        });
    }

    /**
     * Get the title in the current locale
     */
    public function getTitleTranslatedAttribute(): ?string
    {
        $title = $this->attributes['title'] ?? null;
        if (!$title) {
            return null;
        }
        
        // If it's already an array (after cast), use it directly
        if (is_array($title)) {
            $locale = app()->getLocale();
            $fallback = config('app.fallback_locale', 'en');
            return $title[$locale] ?? $title[$fallback] ?? null;
        }
        
        // If it's a JSON string, decode it
        if (is_string($title)) {
            $decoded = json_decode($title, true);
            if (is_array($decoded)) {
                $locale = app()->getLocale();
                $fallback = config('app.fallback_locale', 'en');
                return $decoded[$locale] ?? $decoded[$fallback] ?? null;
            }
        }
        
        return $title;
    }
}
