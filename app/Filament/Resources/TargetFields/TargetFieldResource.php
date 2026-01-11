<?php

namespace App\Filament\Resources\TargetFields;

use App\Filament\Resources\TargetFields\Pages\CreateTargetField;
use App\Filament\Resources\TargetFields\Pages\EditTargetField;
use App\Filament\Resources\TargetFields\Pages\ListTargetFields;
use App\Filament\Resources\TargetFields\Schemas\TargetFieldForm;
use App\Filament\Resources\TargetFields\Tables\TargetFieldsTable;
use App\Models\TargetField;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TargetFieldResource extends Resource
{
    protected static ?string $model = TargetField::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::AcademicCap;

    protected static ?string $navigationLabel = 'Target Fields';

    protected static ?int $navigationSort = 51;

    public static function form(Schema $schema): Schema
    {
        return TargetFieldForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TargetFieldsTable::configure($table);
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
            'index' => ListTargetFields::route('/'),
            'create' => CreateTargetField::route('/create'),
            'edit' => EditTargetField::route('/{record}/edit'),
        ];
    }
}
