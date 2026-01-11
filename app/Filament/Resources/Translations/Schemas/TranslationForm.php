<?php

namespace App\Filament\Resources\Translations\Schemas;

use App\Filament\Helpers\MultilingualHelper;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;

class TranslationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Translation Details')
                    ->tabs([
                        Tabs\Tab::make('Basic Information')
                            ->schema([
                                Section::make('Translation Key')
                                    ->schema([
                                        TextInput::make('key')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->maxLength(255)
                                            ->placeholder('e.g., home.projects_title')
                                            ->helperText('Unique key for this translation (e.g., home.projects_title, common.view_all)'),

                                        Select::make('group')
                                            ->label('Group')
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
                                            ])
                                            ->default('common')
                                            ->required()
                                            ->helperText('Group this translation belongs to'),

                                        Textarea::make('description')
                                            ->label('Description')
                                            ->rows(2)
                                            ->maxLength(500)
                                            ->helperText('Optional: Describe where this translation is used'),
                                    ]),
                            ]),

                        Tabs\Tab::make('Translations')
                            ->schema([
                                Section::make('Translation Values')
                                    ->schema([
                                        MultilingualHelper::multilingualTextInput(
                                            'value',
                                            'Translation Value',
                                            [
                                                'required' => true,
                                                'maxLength' => 500,
                                                'en_placeholder' => 'Enter English translation',
                                                'ar_placeholder' => 'أدخل الترجمة العربية',
                                            ]
                                        ),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}
