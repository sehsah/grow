<?php

namespace App\Filament\Resources\Services\Schemas;

use App\Filament\Helpers\MultilingualHelper;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Service Details')
                    ->tabs([
                        Tabs\Tab::make('Basic Information')
                            ->schema([
                                Section::make('Basic Information')
                                    ->schema([
                                        MultilingualHelper::multilingualTextInput(
                                            'title',
                                            'Title',
                                            [
                                                'required' => true,
                                                'maxLength' => 255,
                                                'live' => true,
                                                'afterStateUpdated' => function ($state, callable $set, $get) {
                                                    $enTitle = $get('title.en');
                                                    if ($enTitle) {
                                                        $set('slug', Str::slug($enTitle));
                                                    }
                                                },
                                            ]
                                        ),

                                        TextInput::make('slug')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->maxLength(255)
                                            ->helperText('Auto-generated from English title'),

                                        MultilingualHelper::multilingualTextarea(
                                            'short_description',
                                            'Short Description',
                                            [
                                                'rows' => 3,
                                                'maxLength' => 500,
                                                'en_helper' => 'Brief description shown in listings (English)',
                                                'ar_helper' => 'وصف موجز يظهر في القوائم (العربية)',
                                            ]
                                        ),

                                        // MultilingualHelper::multilingualRichEditor(
                                        //     'description',
                                        //     'Description',
                                        //     [
                                        //         'en_helper' => 'Full description of the service (English)',
                                        //         'ar_helper' => 'وصف كامل للخدمة (العربية)',
                                        //     ]
                                        // ),

                                        MultilingualHelper::multilingualTextInput(
                                            'category',
                                            'Category',
                                            [
                                                'maxLength' => 255,
                                                'en_placeholder' => 'e.g., Business Consulting',
                                                'ar_placeholder' => 'مثل: استشارات الأعمال',
                                            ]
                                        ),

                                        FileUpload::make('icon')
                                            ->label('Icon (SVG)')
                                            ->directory('services')
                                            ->visibility('public')
                                            ->acceptedFileTypes(['image/svg+xml'])
                                            ->maxSize(5120),

                                        Toggle::make('is_active')
                                        ->label('Active')
                                        ->default(true)
                                        ->helperText('Show this service on the website'),

                                        TextInput::make('order')
                                            ->label('Order')
                                            ->default(0)
                                            ->required()
                                            ->helperText('Sort order of the service'),
                                    ]),
                            ]),


                        Tabs\Tab::make('Service Items')
                            ->schema([
                                Section::make('Items')
                                    ->schema([
                                        Repeater::make('serviceItems')
                                            ->relationship('serviceItems')
                                            ->label('Service Items')
                                            ->addActionLabel('Add Service Item')
                                            ->schema([
                                                FileUpload::make('icon')
                                                    ->label('Icon (SVG)')
                                                    ->directory('services/items')
                                                    ->visibility('public')
                                                    ->acceptedFileTypes(['image/svg+xml'])
                                                    ->maxSize(5120),

                                                MultilingualHelper::multilingualTextInput(
                                                    'title',
                                                    'Title',
                                                    [
                                                        'required' => true,
                                                        'maxLength' => 255,
                                                    ]
                                                ),

                                                MultilingualHelper::multilingualTextInput(
                                                    'subtitle',
                                                    'Subtitle',
                                                    [
                                                        'maxLength' => 255,
                                                    ]
                                                ),

                                                MultilingualHelper::multilingualTextarea(
                                                    'items',
                                                    'items',
                                                    [
                                                        'rows' => 3,
                                                        'maxLength' => 500,
                                                    ]
                                                ),
                                            ])
                                            ->collapsed()
                                            ->grid(1),
                                    ]),
                            ]),

                        Tabs\Tab::make('SEO')
                            ->schema([
                                Section::make('SEO Information')
                                    ->schema([
                                        MultilingualHelper::multilingualTextInput(
                                            'meta_title',
                                            'Meta Title',
                                            [
                                                'maxLength' => 255,
                                                'en_helper' => 'SEO title (defaults to title if empty)',
                                                'ar_helper' => 'عنوان SEO (يستخدم العنوان إذا كان فارغاً)',
                                            ]
                                        ),

                                        MultilingualHelper::multilingualTextarea(
                                            'meta_description',
                                            'Meta Description',
                                            [
                                                'rows' => 3,
                                                'maxLength' => 500,
                                                'en_helper' => 'SEO description for search engines',
                                                'ar_helper' => 'وصف SEO لمحركات البحث',
                                            ]
                                        ),
                                    ]),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
