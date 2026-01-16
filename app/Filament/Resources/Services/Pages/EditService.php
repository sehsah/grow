<?php

namespace App\Filament\Resources\Services\Pages;

use App\Filament\Resources\Services\ServiceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $translatableFields = ['title', 'short_description', 'description', 'category', 'meta_title', 'meta_description'];

        foreach ($translatableFields as $field) {
            if (isset($data[$field . '.en']) || isset($data[$field . '.ar'])) {
                $data[$field] = [
                    'en' => $data[$field . '.en'] ?? '',
                    'ar' => $data[$field . '.ar'] ?? '',
                ];
                unset($data[$field . '.en'], $data[$field . '.ar']);
            }
        }

        if (isset($data['serviceItems']) && is_array($data['serviceItems'])) {
            foreach ($data['serviceItems'] as $index => $item) {
                foreach (['title', 'subtitle', 'description'] as $field) {
                    if (isset($item[$field . '.en']) || isset($item[$field . '.ar'])) {
                        $data['serviceItems'][$index][$field] = [
                            'en' => $item[$field . '.en'] ?? '',
                            'ar' => $item[$field . '.ar'] ?? '',
                        ];
                        unset($data['serviceItems'][$index][$field . '.en'], $data['serviceItems'][$index][$field . '.ar']);
                    }
                }
            }
        }

        return $data;
    }
}
