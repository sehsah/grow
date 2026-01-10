<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
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
}
