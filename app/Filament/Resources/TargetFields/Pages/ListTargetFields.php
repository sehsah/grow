<?php

namespace App\Filament\Resources\TargetFields\Pages;

use App\Filament\Resources\TargetFields\TargetFieldResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTargetFields extends ListRecords
{
    protected static string $resource = TargetFieldResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
