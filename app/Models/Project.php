<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'description',
        'full_description',
        'category',
        'image',
        'gallery',
        'client_name',
        'project_date',
        'project_url',
        'order',
        'is_featured',
        'is_active',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'full_description' => 'array',
        'category' => 'array',
        'client_name' => 'array',
        'meta_title' => 'array',
        'meta_description' => 'array',
        'gallery' => 'array',
        'project_date' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Translatable attributes - these will return strings based on current locale
     */
    protected $translatable = [
        'title',
        'description',
        'full_description',
        'category',
        'client_name',
        'meta_title',
        'meta_description',
    ];
}
