<?php

namespace App\Filament\Resources\WorkingProcesses\Pages;

use App\Filament\Resources\WorkingProcesses\WorkingProcessResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWorkingProcess extends EditRecord
{
    protected static string $resource = WorkingProcessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
