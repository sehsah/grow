<?php

namespace App\Filament\Resources\WorkingProcesses\Pages;

use App\Filament\Resources\WorkingProcesses\WorkingProcessResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWorkingProcesses extends ListRecords
{
    protected static string $resource = WorkingProcessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
