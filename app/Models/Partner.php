<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'logo',
        'website_url',
        'order',
        'is_active',
        'description',
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Translatable attributes - these will return strings based on current locale
     */
    protected $translatable = [
        'name',
        'description',
    ];
}
