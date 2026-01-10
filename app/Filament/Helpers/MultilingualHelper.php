<?php

namespace App\Filament\Helpers;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Tabs;

class MultilingualHelper
{
    /**
     * Create a multilingual text input with language tabs
     */
    public static function multilingualTextInput(
        string $name,
        ?string $label = null,
        array $options = []
    ): Tabs {
        $label = $label ?? ucfirst(str_replace('_', ' ', $name));
        
        return Tabs::make($name . '_tabs')
            ->tabs([
                Tabs\Tab::make('en')
                    ->label('English')
                    ->schema([
                        TextInput::make("{$name}.en")
                            ->label($label . ' (English)')
                            ->required($options['required'] ?? false)
                            ->maxLength($options['maxLength'] ?? 255)
                            ->placeholder($options['en_placeholder'] ?? 'Enter text in English')
                            ->live($options['live'] ?? false)
                            ->afterStateUpdated($options['afterStateUpdated'] ?? null)
                            ->helperText($options['en_helper'] ?? null),
                    ]),
                Tabs\Tab::make('ar')
                    ->label('العربية')
                    ->schema([
                        TextInput::make("{$name}.ar")
                            ->label($label . ' (العربية)')
                            ->required($options['required'] ?? false)
                            ->maxLength($options['maxLength'] ?? 255)
                            ->placeholder($options['ar_placeholder'] ?? 'أدخل النص بالعربية')
                            ->helperText($options['ar_helper'] ?? null),
                    ]),
            ]);
    }

    /**
     * Create a multilingual textarea with language tabs
     */
    public static function multilingualTextarea(
        string $name,
        ?string $label = null,
        array $options = []
    ): Tabs {
        $label = $label ?? ucfirst(str_replace('_', ' ', $name));
        
        return Tabs::make($name . '_tabs')
            ->tabs([
                Tabs\Tab::make('en')
                    ->label('English')
                    ->schema([
                        Textarea::make("{$name}.en")
                            ->label($label . ' (English)')
                            ->required($options['required'] ?? false)
                            ->rows($options['rows'] ?? 3)
                            ->maxLength($options['maxLength'] ?? null)
                            ->placeholder($options['en_placeholder'] ?? 'Enter text in English')
                            ->helperText($options['en_helper'] ?? null)
                            ->columnSpanFull(),
                    ]),
                Tabs\Tab::make('ar')
                    ->label('العربية')
                    ->schema([
                        Textarea::make("{$name}.ar")
                            ->label($label . ' (العربية)')
                            ->required($options['required'] ?? false)
                            ->rows($options['rows'] ?? 3)
                            ->maxLength($options['maxLength'] ?? null)
                            ->placeholder($options['ar_placeholder'] ?? 'أدخل النص بالعربية')
                            ->helperText($options['ar_helper'] ?? null)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    /**
     * Create a multilingual rich editor with language tabs
     */
    public static function multilingualRichEditor(
        string $name,
        ?string $label = null,
        array $options = []
    ): Tabs {
        $label = $label ?? ucfirst(str_replace('_', ' ', $name));
        
        return Tabs::make($name . '_tabs')
            ->tabs([
                Tabs\Tab::make('en')
                    ->label('English')
                    ->schema([
                        RichEditor::make("{$name}.en")
                            ->label($label . ' (English)')
                            ->required($options['required'] ?? false)
                            ->placeholder($options['en_placeholder'] ?? 'Enter content in English')
                            ->helperText($options['en_helper'] ?? null)
                            ->toolbarButtons($options['toolbarButtons'] ?? null)
                            ->columnSpanFull(),
                    ]),
                Tabs\Tab::make('ar')
                    ->label('العربية')
                    ->schema([
                        RichEditor::make("{$name}.ar")
                            ->label($label . ' (العربية)')
                            ->required($options['required'] ?? false)
                            ->placeholder($options['ar_placeholder'] ?? 'أدخل المحتوى بالعربية')
                            ->helperText($options['ar_helper'] ?? null)
                            ->toolbarButtons($options['toolbarButtons'] ?? null)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
