<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasTranslations;

    protected $fillable = [
        'author',
        'position',
        'content',
        'image',
    ];

    protected $casts = [
        'author' => 'array',
        'position' => 'array',
        'content' => 'array',
    ];

    /**
     * Translatable attributes.
     */
    protected array $translatable = [
        'author',
        'position',
        'content',
    ];
}
