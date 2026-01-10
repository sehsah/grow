<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'position',
        'image',
        'bio',
        'email',
        'linkedin_url',
        'twitter_url',
        'facebook_url',
        'order',
        'is_active',
    ];

    protected $casts = [
        'name' => 'array',
        'position' => 'array',
        'bio' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Translatable attributes - these will return strings based on current locale
     */
    protected $translatable = [
        'name',
        'position',
        'bio',
    ];
}
