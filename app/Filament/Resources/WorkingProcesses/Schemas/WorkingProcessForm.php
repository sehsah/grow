<?php

namespace App\Filament\Resources\WorkingProcesses\Schemas;

use App\Filament\Helpers\MultilingualHelper;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;

class WorkingProcessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Working Process Details')
                    ->tabs([
                        Tabs\Tab::make('Basic Information')
                            ->schema([
                                Section::make('Basic Information')
                                    ->schema([
                                        TextInput::make('step_number')
                                            ->label('Step Number')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->maxLength(10)
                                            ->placeholder('e.g., Step 01, Step 02')
                                            ->helperText('Step number identifier (e.g., Step 01, Step 02)'),

                                        MultilingualHelper::multilingualTextInput(
                                            'title',
                                            'Title',
                                            [
                                                'required' => true,
                                                'maxLength' => 255,
                                                'en_placeholder' => 'e.g., Research',
                                                'ar_placeholder' => 'مثل: البحث',
                                            ]
                                        ),

                                        MultilingualHelper::multilingualTextarea(
                                            'description',
                                            'Description',
                                            [
                                                'required' => true,
                                                'rows' => 4,
                                                'maxLength' => 500,
                                                'en_helper' => 'Brief description of this step',
                                                'ar_helper' => 'وصف موجز لهذه الخطوة',
                                            ]
                                        ),

                                        Textarea::make('icon')
                                            ->label('Icon (SVG)')
                                            ->rows(8)
                                            ->helperText('Paste SVG icon code here')
                                            ->placeholder('<svg xmlns="...">...</svg>'),
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
                                            ->helperText('Show this step on the website'),
                                    ])
                                    ->columns(2),
                            ]),
                    ]),
            ]);
    }
}
