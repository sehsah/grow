<?php

namespace App\Filament\Resources\Teams\Schemas;

use App\Filament\Helpers\MultilingualHelper;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Team Member Details')
                    ->tabs([
                        Tabs\Tab::make('Basic Information')
                            ->schema([
                                Section::make('Basic Information')
                                    ->schema([
                                        MultilingualHelper::multilingualTextInput(
                                            'name',
                                            'Full Name',
                                            [
                                                'required' => true,
                                                'maxLength' => 255,
                                            ]
                                        ),

                                        MultilingualHelper::multilingualTextInput(
                                            'position',
                                            'Position/Title',
                                            [
                                                'required' => true,
                                                'maxLength' => 255,
                                                'en_placeholder' => 'e.g., CEO & Founder',
                                                'ar_placeholder' => 'مثل: الرئيس التنفيذي والمؤسس',
                                            ]
                                        ),

                                        FileUpload::make('image')
                                            ->image()
                                            ->directory('teams')
                                            ->visibility('public')
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                            ->maxSize(5120)
                                            ->required()
                                            ->label('Profile Photo')
                                            ->columnSpanFull(),

                                        MultilingualHelper::multilingualRichEditor(
                                            'bio',
                                            'Bio/Biography',
                                            [
                                                'rows' => 4,
                                                'maxLength' => 1000,
                                                'en_helper' => 'Brief biography about the team member (English)',
                                                'ar_helper' => 'سيرة ذاتية موجزة عن عضو الفريق (العربية)',
                                            ]
                                        ),
                                    ]),
                            ]),



                        Tabs\Tab::make('Settings')
                            ->schema([
                                Section::make('Display Settings')
                                    ->schema([
                                        TextInput::make('order')
                                            ->numeric()
                                            ->default(0)
                                            ->helperText('Display order (lower numbers appear first)'),

                                        Toggle::make('is_active')
                                            ->label('Active')
                                            ->default(true)
                                            ->helperText('Show this team member on the website'),
                                    ])
                                    ->columns(2),
                            ]),
                    ]),
            ]);
    }
}
