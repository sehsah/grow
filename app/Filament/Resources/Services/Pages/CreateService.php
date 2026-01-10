<?php

namespace App\Filament\Resources\Services\Pages;

use App\Filament\Resources\Services\ServiceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;

    /**
     * Transform nested form data back to JSON array format
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $translatableFields = ['title', 'short_description', 'description', 'category', 'meta_title', 'meta_description'];
        
        foreach ($translatableFields as $field) {
            // Combine title.en and title.ar back into title array
            if (isset($data[$field . '.en']) || isset($data[$field . '.ar'])) {
                $data[$field] = [
                    'en' => $data[$field . '.en'] ?? '',
                    'ar' => $data[$field . '.ar'] ?? '',
                ];
                // Remove the nested fields
                unset($data[$field . '.en']);
                unset($data[$field . '.ar']);
            }
        }
        
        return $data;
    }
}
