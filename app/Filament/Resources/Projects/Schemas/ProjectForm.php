<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Filament\Helpers\MultilingualHelper;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Project Details')
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
                                            ]
                                        ),

                                        FileUpload::make('image')
                                            ->image()
                                            ->directory('projects')
                                            ->visibility('public')
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                            ->maxSize(5120)
                                            ->required(),
                                        MultilingualHelper::multilingualTextarea(
                                            'description',
                                            'Description',
                                            [
                                                'required' => true,
                                                'rows' => 4,
                                                'en_helper' => 'Short description shown in listings (English)',
                                                'ar_helper' => 'وصف موجز يظهر في القوائم (العربية)',
                                            ]
                                        ),

                                        MultilingualHelper::multilingualRichEditor(
                                            'full_description',
                                            'Full Description',
                                            [
                                                'rows' => 6,
                                                'en_helper' => 'Complete project description (English)',
                                                'ar_helper' => 'وصف المشروع الكامل (العربية)',
                                            ]
                                        ),

                                        MultilingualHelper::multilingualTextInput(
                                            'category',
                                            'Category',
                                            [
                                                'maxLength' => 255,
                                                'en_placeholder' => 'e.g., Visual Identity Design',
                                                'ar_placeholder' => 'مثل: تصميم الهوية البصرية',
                                            ]
                                        ),

                                        MultilingualHelper::multilingualTextInput(
                                            'client_name',
                                            'Client Name',
                                            [
                                                'maxLength' => 255,
                                            ]
                                        ),
                                    ]),
                            ]),



                        Tabs\Tab::make('Settings & SEO')
                            ->schema([
                                Section::make('Settings')
                                    ->schema([
                                        Toggle::make('is_featured')
                                            ->label('Featured Project')
                                            ->default(false),

                                        Toggle::make('is_active')
                                            ->label('Active')
                                            ->default(true),
                                    ])
                                    ->columns(2),

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
                    ])->columnSpanFull(),
            ]);
    }
}
