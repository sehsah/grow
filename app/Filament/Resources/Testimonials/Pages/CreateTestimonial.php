<?php

namespace App\Filament\Resources\Testimonials\Pages;

use App\Filament\Resources\Testimonials\TestimonialResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTestimonial extends CreateRecord
{
    protected static string $resource = TestimonialResource::class;

    /**
     * Transform nested form data back to JSON array format.
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $translatableFields = ['author', 'position', 'content'];

        foreach ($translatableFields as $field) {
            if (isset($data[$field . '.en']) || isset($data[$field . '.ar'])) {
                $data[$field] = [
                    'en' => $data[$field . '.en'] ?? '',
                    'ar' => $data[$field . '.ar'] ?? '',
                ];
                unset($data[$field . '.en'], $data[$field . '.ar']);
            }
        }

        return $data;
    }
}
