<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
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
                                        TextInput::make('name')
                                            ->required()
                                            ->maxLength(255)
                                            ->label('Full Name'),
                                        
                                        TextInput::make('position')
                                            ->required()
                                            ->maxLength(255)
                                            ->label('Position/Title')
                                            ->placeholder('e.g., CEO & Founder, Senior Developer'),
                                        
                                        FileUpload::make('image')
                                            ->image()
                                            ->directory('teams')
                                            ->visibility('public')
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                            ->maxSize(5120)
                                            ->required()
                                            ->label('Profile Photo'),
                                        
                                        Textarea::make('bio')
                                            ->rows(4)
                                            ->maxLength(1000)
                                            ->label('Bio/Biography')
                                            ->helperText('Brief biography about the team member')
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(2),
                            ]),
                        
                        Tabs\Tab::make('Contact & Social')
                            ->schema([
                                Section::make('Contact Information')
                                    ->schema([
                                        TextInput::make('email')
                                            ->email()
                                            ->maxLength(255)
                                            ->label('Email Address'),
                                        
                                        TextInput::make('linkedin_url')
                                            ->url()
                                            ->maxLength(255)
                                            ->label('LinkedIn URL')
                                            ->prefixIcon('heroicon-m-link'),
                                        
                                        TextInput::make('twitter_url')
                                            ->url()
                                            ->maxLength(255)
                                            ->label('Twitter/X URL')
                                            ->prefixIcon('heroicon-m-link'),
                                    ])
                                    ->columns(3),
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
