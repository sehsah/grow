<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->copyable()
                    ->copyMessage('Key copied!'),

                TextColumn::make('group')
                    ->badge()
                    ->color('primary')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('type')
                    ->badge()
                    ->color(fn ($record) => match($record->type) {
                        'number' => 'success',
                        'image' => 'warning',
                        'json' => 'info',
                        'boolean' => 'danger',
                        default => 'gray',
                    })
                    ->searchable(),

                TextColumn::make('value')
                    ->limit(60)
                    ->wrap()
                    ->searchable()
                    ->formatStateUsing(function ($state, $record) {
                        if ($record->type === 'image') {
                            return 'Image uploaded';
                        }
                        if ($record->type === 'json') {
                            return json_encode(json_decode($state, true), JSON_PRETTY_PRINT);
                        }
                        return $state;
                    }),

                ImageColumn::make('value')
                    ->label('Image')
                    ->circular()
                    ->size(50)
                    ->visible(fn ($record) => isset($record?->type) && $record->type === 'image'),

                TextColumn::make('description')
                    ->limit(50)
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('group')
                    ->options([
                        'stats' => 'Statistics',
                        'values' => 'Values',
                        'general' => 'General',
                        'home' => 'Home Page',
                        'about' => 'About Page',
                    ]),

                SelectFilter::make('type')
                    ->options([
                        'text' => 'Text',
                        'number' => 'Number',
                        'image' => 'Image',
                        'json' => 'JSON',
                        'boolean' => 'Boolean',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->defaultSort('group', 'asc')
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
