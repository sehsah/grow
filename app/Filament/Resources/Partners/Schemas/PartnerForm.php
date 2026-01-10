<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Partner Information')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label('Partner Name'),
                        
                        FileUpload::make('logo')
                            ->image()
                            ->directory('partners')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml'])
                            ->maxSize(2048)
                            ->required()
                            ->label('Partner Logo'),
                        
                        TextInput::make('website_url')
                            ->url()
                            ->maxLength(255)
                            ->label('Website URL')
                            ->helperText('Optional: Partner website URL'),
                        
                        Textarea::make('description')
                            ->rows(3)
                            ->maxLength(500)
                            ->helperText('Optional: Brief description about the partner'),
                    ])
                    ->columns(2),
                
                Section::make('Settings')
                    ->schema([
                        TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Display order (lower numbers appear first)'),
                        
                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Show this partner on the website'),
                    ])
                    ->columns(2),
            ]);
    }
}
