<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    /**
     * Transform nested form data back to JSON array format
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $translatableFields = ['title', 'excerpt', 'content', 'author', 'meta_title', 'meta_description'];
        
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
