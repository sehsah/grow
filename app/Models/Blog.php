<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'image',
        'slug',
        'author',
        'published_at',
        'read_time',
        'order',
        'is_featured',
        'is_active',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'title' => 'array',
        'excerpt' => 'array',
        'content' => 'array',
        'author' => 'array',
        'meta_title' => 'array',
        'meta_description' => 'array',
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Translatable attributes - these will return strings based on current locale
     */
    protected $translatable = [
        'title',
        'excerpt',
        'content',
        'author',
        'meta_title',
        'meta_description',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                // Use English title for slug generation
                $title = is_array($blog->title) ? ($blog->title['en'] ?? reset($blog->title)) : $blog->title;
                $blog->slug = Str::slug($title);
            }
        });
    }
}
