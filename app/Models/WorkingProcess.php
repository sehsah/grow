<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class WorkingProcess extends Model
{
    use HasTranslations;

    protected $fillable = [
        'step_number',
        'title',
        'description',
        'icon',
        'order',
        'is_active',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Translatable attributes - these will return strings based on current locale
     */
    protected $translatable = [
        'title',
        'description',
    ];
}
