<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;

    /**
     * Transform nested form data back to JSON array format
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $translatableFields = ['title', 'description', 'full_description', 'category', 'client_name', 'meta_title', 'meta_description'];
        
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
        
        // Handle gallery field - ensure it's an array
        if (isset($data['gallery']) && is_string($data['gallery'])) {
            $decoded = json_decode($data['gallery'], true);
            $data['gallery'] = is_array($decoded) ? $decoded : [];
        } elseif (!isset($data['gallery'])) {
            $data['gallery'] = [];
        }
        
        return $data;
    }
}
