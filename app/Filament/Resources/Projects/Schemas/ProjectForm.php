<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
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
                                        TextInput::make('title')
                                            ->required()
                                            ->maxLength(255),
                                        
                                        Textarea::make('description')
                                            ->required()
                                            ->rows(4)
                                            ->columnSpanFull(),
                                        
                                        Textarea::make('full_description')
                                            ->rows(6)
                                            ->columnSpanFull(),
                                        
                                        Select::make('category')
                                            ->options([
                                                'Visual Identity Design' => 'Visual Identity Design',
                                                'Digital Marketing' => 'Digital Marketing',
                                                'Web Development' => 'Web Development',
                                                'Mobile Development' => 'Mobile Development',
                                                'UI/UX Design' => 'UI/UX Design',
                                            ])
                                            ->searchable(),
                                        
                                        TextInput::make('client_name')
                                            ->maxLength(255),
                                    ])
                                    ->columns(2),
                            ]),
                        
                        Tabs\Tab::make('Media & Project Info')
                            ->schema([
                                Section::make('Media')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image()
                                            ->directory('projects')
                                            ->visibility('public')
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                            ->maxSize(5120)
                                            ->required(),
                                        
                                        Textarea::make('gallery')
                                            ->rows(3)
                                            ->helperText('JSON array of image URLs')
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(2),
                                
                                Section::make('Project Information')
                                    ->schema([
                                        DatePicker::make('project_date')
                                            ->displayFormat('d/m/Y')
                                            ->native(false),
                                        
                                        TextInput::make('project_url')
                                            ->url()
                                            ->maxLength(255)
                                            ->helperText('Live project URL'),
                                        
                                        TextInput::make('order')
                                            ->numeric()
                                            ->default(0)
                                            ->helperText('Display order (lower numbers appear first)'),
                                    ])
                                    ->columns(3),
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
