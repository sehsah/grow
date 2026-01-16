<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceItem extends Model
{
    use HasTranslations;

    protected $fillable = [
        'service_id',
        'icon',
        'title',
        'subtitle',
        'description',
        'items',
    ];

    protected $casts = [
        'title' => 'array',
        'subtitle' => 'array',
        'description' => 'array',
        'items' => 'array',
    ];

    protected array $translatable = [
        'title',
        'subtitle',
        'description',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
