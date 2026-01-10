<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Setting Information')
                    ->schema([
                        TextInput::make('key')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->label('Setting Key')
                            ->helperText('Unique key identifier (e.g., stats.clients_count)')
                            ->disabledOn('edit'),
                        
                        Select::make('group')
                            ->options([
                                'stats' => 'Statistics',
                                'values' => 'Values',
                                'general' => 'General',
                                'home' => 'Home Page',
                                'about' => 'About Page',
                            ])
                            ->required()
                            ->searchable(),
                        
                        Select::make('type')
                            ->options([
                                'text' => 'Text',
                                'number' => 'Number',
                                'image' => 'Image',
                                'json' => 'JSON',
                                'boolean' => 'Boolean',
                            ])
                            ->required()
                            ->default('text')
                            ->live(),
                        
                        TextInput::make('value')
                            ->label('Value')
                            ->required(fn ($get) => $get('type') !== 'image')
                            ->visible(fn ($get) => in_array($get('type'), ['text', 'number', 'boolean']))
                            ->numeric(fn ($get) => $get('type') === 'number')
                            ->helperText(fn ($get) => $get('type') === 'number' ? 'Enter numeric value' : 'Enter text value'),
                        
                        Textarea::make('value')
                            ->label('Value (JSON)')
                            ->required()
                            ->visible(fn ($get) => $get('type') === 'json')
                            ->helperText('Enter valid JSON format (e.g., {"key": "value"})')
                            ->rows(6),
                        
                        FileUpload::make('value')
                            ->label('Value (Image)')
                            ->image()
                            ->directory('settings')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(5120)
                            ->required()
                            ->visible(fn ($get) => $get('type') === 'image'),
                        
                        Textarea::make('description')
                            ->rows(2)
                            ->maxLength(500)
                            ->helperText('Description of what this setting is used for')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
