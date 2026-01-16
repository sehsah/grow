<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * Translatable attributes - these will return strings based on current locale
     */
    protected $translatable = [
        'title',
        'short_description',
        'description',
        'category',
        'meta_title',
        'meta_description',
    ];

    public function serviceItems(): HasMany
    {
        return $this->hasMany(ServiceItem::class);
    }

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
}
