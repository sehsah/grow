<?php

namespace App\Filament\Resources\Partners\Pages;

use App\Filament\Resources\Partners\PartnerResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePartner extends CreateRecord
{
    protected static string $resource = PartnerResource::class;

    /**
     * Transform nested form data back to JSON array format
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $translatableFields = ['name', 'description'];
        
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
