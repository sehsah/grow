<?php

namespace App\Filament\Resources\Teams\Pages;

use App\Filament\Resources\Teams\TeamResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTeam extends CreateRecord
{
    protected static string $resource = TeamResource::class;

    /**
     * Transform nested form data back to JSON array format
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $translatableFields = ['name', 'position', 'bio'];
        
        foreach ($translatableFields as $field) {
            if (isset($data[$field . '.en']) || isset($data[$field . '.ar'])) {
                $data[$field] = [
                    'en' => $data[$field . '.en'] ?? '',
                    'ar' => $data[$field . '.ar'] ?? '',
                ];
                unset($data[$field . '.en']);
                unset($data[$field . '.ar']);
            }
        }
        
        return $data;
    }
}
