<?php

namespace App\Filament\Resources\Translations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TranslationsTable
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
                    ->copyMessage('Key copied!')
                    ->limit(50),
                
                TextColumn::make('value')
                    ->label('Translation')
                    ->searchable()
                    ->limit(50)
                    ->getStateUsing(function ($record) {
                        $value = $record->value;
                        if (is_array($value)) {
                            $locale = app()->getLocale();
                            return $value[$locale] ?? $value['en'] ?? '';
                        }
                        return $value;
                    }),
                
                BadgeColumn::make('group')
                    ->colors([
                        'primary' => 'common',
                        'success' => 'home',
                        'warning' => 'about',
                        'danger' => 'services',
                        'info' => 'projects',
                    ])
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('description')
                    ->limit(30)
                    ->toggleable(isToggledHiddenByDefault: true),
                
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('group')
                    ->options([
                        'common' => 'Common',
                        'home' => 'Home Page',
                        'about' => 'About Page',
                        'services' => 'Services',
                        'projects' => 'Projects',
                        'blog' => 'Blog',
                        'contact' => 'Contact',
                        'career' => 'Career',
                        'footer' => 'Footer',
                        'header' => 'Header',
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
