<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Illuminate\Support\Str;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Blog Details')
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
                                        
                                        Textarea::make('excerpt')
                                            ->rows(3)
                                            ->maxLength(500)
                                            ->helperText('Short excerpt shown in listings')
                                            ->columnSpanFull(),
                                        
                                        RichEditor::make('content')
                                            ->toolbarButtons([
                                                'attachFiles',
                                                'blockquote',
                                                'bold',
                                                'bulletList',
                                                'codeBlock',
                                                'h2',
                                                'h3',
                                                'italic',
                                                'link',
                                                'orderedList',
                                                'redo',
                                                'strike',
                                                'underline',
                                                'undo',
                                            ])
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(2),
                            ]),
                        
                        Tabs\Tab::make('Media & Settings')
                            ->schema([
                                Section::make('Media')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image()
                                            ->directory('blogs')
                                            ->visibility('public')
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                            ->maxSize(5120)
                                            ->required(),
                                    ]),
                                
                                Section::make('Blog Settings')
                                    ->schema([
                                        TextInput::make('author')
                                            ->maxLength(255)
                                            ->default('COMPACT Team'),
                                        
                                        DatePicker::make('published_at')
                                            ->label('Published Date')
                                            ->displayFormat('d/m/Y')
                                            ->native(false)
                                            ->default(now()),
                                        
                                        TextInput::make('read_time')
                                            ->numeric()
                                            ->default(5)
                                            ->helperText('Reading time in minutes'),
                                        
                                        TextInput::make('order')
                                            ->numeric()
                                            ->default(0)
                                            ->helperText('Display order (lower numbers appear first)'),
                                    ])
                                    ->columns(4),
                                
                                Section::make('Status')
                                    ->schema([
                                        Toggle::make('is_featured')
                                            ->label('Featured Blog')
                                            ->default(false)
                                            ->helperText('Show as featured blog'),
                                        
                                        Toggle::make('is_active')
                                            ->label('Active')
                                            ->default(true)
                                            ->helperText('Show this blog on the website'),
                                    ])
                                    ->columns(2),
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
