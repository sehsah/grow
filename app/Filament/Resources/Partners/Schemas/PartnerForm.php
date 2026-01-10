<?php

namespace App\Filament\Resources\Partners\Schemas;

use App\Filament\Helpers\MultilingualHelper;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
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
                        MultilingualHelper::multilingualTextInput(
                            'name',
                            'Partner Name',
                            [
                                'required' => true,
                                'maxLength' => 255,
                            ]
                        ),
                        
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
                        
                        MultilingualHelper::multilingualTextarea(
                            'description',
                            'Description',
                            [
                                'rows' => 3,
                                'maxLength' => 500,
                                'en_helper' => 'Optional: Brief description about the partner',
                                'ar_helper' => 'اختياري: وصف موجز عن الشريك',
                            ]
                        ),
                    ]),
                
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
