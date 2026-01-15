<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use App\Filament\Helpers\MultilingualHelper;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Testimonial Details')
                    ->schema([
                        MultilingualHelper::multilingualTextInput(
                            'author',
                            'Author Name',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'Name of the person giving the testimonial',
                                'ar_helper' => 'اسم الشخص الذي كتب التوصية',
                            ]
                        ),

                        MultilingualHelper::multilingualTextInput(
                            'position',
                            'Position/Title',
                            [
                                'maxLength' => 255,
                                'en_placeholder' => 'e.g., Product Manager',
                                'ar_placeholder' => 'مثل: مدير المنتج',
                            ]
                        ),

                        FileUpload::make('image')
                            ->image()
                            ->directory('testimonials')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(4096)
                            ->label('Author Photo'),

                        MultilingualHelper::multilingualTextarea(
                            'content',
                            'Testimonial Content',
                            [
                                'required' => true,
                                'rows' => 4,
                                'maxLength' => 1000,
                                'en_helper' => 'What the author said about you',
                                'ar_helper' => 'ما قاله الكاتب عنك',
                            ]
                        ),
                    ]),
            ]);
    }
}
