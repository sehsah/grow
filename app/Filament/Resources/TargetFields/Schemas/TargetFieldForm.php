<?php

namespace App\Filament\Resources\TargetFields\Schemas;

use App\Filament\Helpers\MultilingualHelper;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;

class TargetFieldForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Target Field Details')
                    ->tabs([
                        Tabs\Tab::make('Basic Information')
                            ->schema([
                                Section::make('Basic Information')
                                    ->schema([
                                        MultilingualHelper::multilingualTextInput(
                                            'name',
                                            'Name',
                                            [
                                                'required' => true,
                                                'maxLength' => 255,
                                                'en_placeholder' => 'e.g., Construction',
                                                'ar_placeholder' => 'مثل: البناء',
                                            ]
                                        ),

                                        \Filament\Forms\Components\FileUpload::make('icon')
                                            ->label('Icon (SVG)')
                                            ->directory('target_fields')
                                            ->visibility('public')
                                            ->acceptedFileTypes(['image/svg+xml'])
                                            ->maxSize(5120),
                                    ]),
                            ]),

                        Tabs\Tab::make('Settings')
                            ->schema([
                                Section::make('Display Settings')
                                    ->schema([
                                        \Filament\Forms\Components\TextInput::make('order')
                                            ->numeric()
                                            ->default(0)
                                            ->required()
                                            ->helperText('Order for display (lower numbers appear first)'),

                                        Toggle::make('is_active')
                                            ->label('Active')
                                            ->default(true)
                                            ->helperText('Show this field on the website'),
                                    ])
                                    ->columns(2),
                            ]),
                    ]),
            ]);
    }
}
