<?php

namespace App\Filament\Resources\WorkingProcesses;

use App\Filament\Resources\WorkingProcesses\Pages\CreateWorkingProcess;
use App\Filament\Resources\WorkingProcesses\Pages\EditWorkingProcess;
use App\Filament\Resources\WorkingProcesses\Pages\ListWorkingProcesses;
use App\Filament\Resources\WorkingProcesses\Schemas\WorkingProcessForm;
use App\Filament\Resources\WorkingProcesses\Tables\WorkingProcessesTable;
use App\Models\WorkingProcess;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WorkingProcessResource extends Resource
{
    protected static ?string $model = WorkingProcess::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;
    
    protected static ?string $navigationLabel = 'Working Process';
    
    protected static ?int $navigationSort = 50;

    public static function form(Schema $schema): Schema
    {
        return WorkingProcessForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WorkingProcessesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWorkingProcesses::route('/'),
            'create' => CreateWorkingProcess::route('/create'),
            'edit' => EditWorkingProcess::route('/{record}/edit'),
        ];
    }
}
