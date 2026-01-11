<?php

namespace App\Filament\Resources\TargetFields\Pages;

use App\Filament\Resources\TargetFields\TargetFieldResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTargetField extends EditRecord
{
    protected static string $resource = TargetFieldResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
