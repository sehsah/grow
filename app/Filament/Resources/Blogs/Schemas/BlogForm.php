<?php

namespace App\Filament\Resources\Blogs\Schemas;

use App\Filament\Helpers\MultilingualHelper;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
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
                                            'excerpt',
                                            'Excerpt',
                                            [
                                                'rows' => 3,
                                                'maxLength' => 500,
                                                'en_helper' => 'Short excerpt shown in listings (English)',
                                                'ar_helper' => 'مقتطف قصير يظهر في القوائم (العربية)',
                                            ]
                                        ),

                                        MultilingualHelper::multilingualRichEditor(
                                            'content',
                                            'Content',
                                            [
                                                'toolbarButtons' => [
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
                                                ],
                                                'en_helper' => 'Full blog post content (English)',
                                                'ar_helper' => 'محتوى المقال الكامل (العربية)',
                                            ]
                                        ),
                                    ]),
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
                                        MultilingualHelper::multilingualTextInput(
                                            'author',
                                            'Author',
                                            [
                                                'maxLength' => 255,
                                                'en_placeholder' => 'e.g., COMPACT Team',
                                                'ar_placeholder' => 'مثل: فريق COMPACT',
                                            ]
                                        ),

                                        DateTimePicker::make('published_at')
                                            ->label('Published Date')
                                            ->displayFormat('d/m/Y H:i')
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
                    ]),
            ]);
    }
}
