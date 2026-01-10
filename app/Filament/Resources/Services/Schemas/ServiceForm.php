<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
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
                                        TextInput::make('title')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function ($state, callable $set) {
                                                if (empty($state)) {
                                                    return;
                                                }
                                                $set('slug', Str::slug($state));
                                            }),
                                        
                                        TextInput::make('slug')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->maxLength(255)
                                            ->helperText('Auto-generated from title'),
                                        
                                        Textarea::make('short_description')
                                            ->rows(3)
                                            ->maxLength(500)
                                            ->helperText('Brief description shown in listings'),
                                        
                                        Textarea::make('description')
                                            ->rows(5)
                                            ->columnSpanFull(),
                                        
                                        Select::make('category')
                                            ->options([
                                                'Business Consulting' => 'Business Consulting',
                                                'Sales' => 'Sales',
                                                'Talent Acquisition' => 'Talent Acquisition',
                                                'Web Development' => 'Web Development',
                                            ])
                                            ->searchable(),
                                    ])
                                    ->columns(2),
                            ]),
                        
                        Tabs\Tab::make('Media & Settings')
                            ->schema([
                                Section::make('Media')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image()
                                            ->directory('services')
                                            ->visibility('public')
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                            ->maxSize(5120),
                                        
                                        TextInput::make('icon')
                                            ->label('Icon Class/Name')
                                            ->helperText('SVG icon class or name (e.g., lucide-building2)')
                                            ->placeholder('lucide-building2'),
                                    ])
                                    ->columns(2),
                                
                                Section::make('Settings')
                                    ->schema([
                                        TextInput::make('order')
                                            ->numeric()
                                            ->default(0)
                                            ->helperText('Order for display (lower numbers appear first)'),
                                        
                                        Toggle::make('is_featured')
                                            ->label('Featured Service')
                                            ->default(false)
                                            ->helperText('Show as featured service'),
                                        
                                        Toggle::make('is_active')
                                            ->label('Active')
                                            ->default(true)
                                            ->helperText('Show this service on the website'),
                                    ])
                                    ->columns(3),
                            ]),
                        
                        Tabs\Tab::make('SEO')
                            ->schema([
                                Section::make('SEO Information')
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->maxLength(255)
                                            ->helperText('SEO title (defaults to title if empty)'),
                                        
                                        Textarea::make('meta_description')
                                            ->rows(3)
                                            ->maxLength(500)
                                            ->helperText('SEO description for search engines'),
                                    ])
                                    ->columns(1),
                            ]),
                    ]),
            ]);
    }
}
