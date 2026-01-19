<?php

namespace App\Filament\Pages;

use App\Filament\Helpers\MultilingualHelper;
use App\Helpers\SettingsHelper;
use App\Models\Setting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Actions\Action;
use Filament\Schemas\Components\Actions;
use Filament\Forms\Components\TextInput;

class SiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string | \BackedEnum | null  $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected string $view = 'filament.pages.site-settings';

    protected static ?string $navigationLabel = 'Site Settings';

    protected static ?int $navigationSort = 100;

    public ?array $data = [];

    public function mount(): void
    {
        // Load existing settings directly into $this->data
        $this->data = [
            'site_title' => Setting::getValue('site.title'),
            'logo' => Setting::getValue('site.logo', '/assets/logo-DSroQpd9.png'),
            'hero_title' => Setting::getValue('home.hero_title'),
            'hero_subtitle' => Setting::getValue('home.hero_subtitle'),
            'hero_description' => Setting::getValue('home.hero_description'),
            'mission' => Setting::getValue('site.mission'),
            'mission_title' => Setting::getValue('site.mission_title'),
            'vision' => Setting::getValue('site.vision'),
            'vision_title' => Setting::getValue('site.vision_title'),
            'strengths_title' => Setting::getValue('home.strengths_title'),
            'strengths_subtitle' => Setting::getValue('home.strengths_subtitle'),
            'competitive_advantages' => Setting::getValue('home.competitive_advantages'),
            'core_values' => Setting::getValue('home.core_values'),
            'address' => Setting::getValue('site.address'),
            'phone' => Setting::getValue('site.phone'),
            'phone_secondary' => Setting::getValue('site.phone_secondary'),
            'email' => Setting::getValue('site.email'),
            'social_links' => Setting::getValue('site.social_links'),
            'video_url' => Setting::getValue('home.video_url'),
            'image_cover' => Setting::getValue('home.image_cover'),
            'clients_count' => Setting::getValue('stats.clients_count'),
            'projects_count' => Setting::getValue('stats.projects_count'),
            'years_experience' => Setting::getValue('stats.years_experience'),
            'experts_count' => Setting::getValue('stats.experts_count'),
            'services_title' => Setting::getValue('services.title'),
            'services_subtitle' => Setting::getValue('services.subtitle'),
            'services_image' => Setting::getValue('services.image'),
            'services_badge' => Setting::getValue('services.badge'),
            'about_title' => Setting::getValue('about.title'),
            'about_description' => Setting::getValue('about.description'),
            'about_badge' => Setting::getValue('about.badge'),
            'about_image' => Setting::getValue('about.image'),
            'whatsapp' => Setting::getValue('site.whatsapp'),
        ];

        // Fill the form to ensure all fields are properly hydrated
        $this->form->fill($this->data);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Basic Information')
                    ->schema([
                        MultilingualHelper::multilingualTextInput(
                            'site_title',
                            'Site Title',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'The main title of your website',
                                'ar_helper' => 'العنوان الرئيسي لموقعك',
                            ]
                        ),

                        FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->directory('settings')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml'])
                            ->maxSize(5120)
                            ->columnSpanFull(),
                    ]),
                Section::make('Hero Section')
                    ->schema([
                        MultilingualHelper::multilingualTextInput(
                            'hero_title',
                            'Hero Title',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'The title of the hero section',
                                'ar_helper' => 'عنوان القسم الرئيسي',
                            ]
                        ),
                        MultilingualHelper::multilingualTextInput(
                            'hero_subtitle',
                            'Hero Subtitle',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'The subtitle of the hero section',
                                'ar_helper' => 'العنوان الفرعي للقسم الرئيسي',
                            ]
                        ),
                        MultilingualHelper::multilingualTextarea(
                            'hero_description',
                            'Hero Description',
                            [
                                'rows' => 3,
                                'en_placeholder' => 'Enter hero description in English',
                                'ar_placeholder' => 'أدخل وصف القسم الرئيسي بالعربية',
                            ]
                        ),
                    ]),

               //add section for video url  and image cover
               Section::make('Video and Image Cover')
                    ->schema([
                        TextInput::make('video_url')
                            ->label('Video URL')
                            ->url()
                            ->required()
                            ->placeholder('https://...')
                            ->columnSpanFull(),
                        FileUpload::make('image_cover')
                            ->label('Image Cover')
                            ->image()
                            ->directory('settings')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml'])
                            ->maxSize(5120)
                            ->columnSpanFull(),
                    ]),
                Section::make('About Company')
                    ->schema([
                        MultilingualHelper::multilingualTextInput(
                            'mission_title',
                            'Mission Title',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'The title of the mission',
                                'ar_helper' => 'عنوان الرسالة',
                            ]
                        ),
                        MultilingualHelper::multilingualTextarea(
                            'mission',
                            'Our Mission',
                            [
                                'rows' => 3,
                                'en_placeholder' => 'Enter company mission in English',
                                'ar_placeholder' => 'أدخل رسالة الشركة بالعربية',
                            ]
                        ),
                        MultilingualHelper::multilingualTextInput(
                            'vision_title',
                            'Vision Title',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'The title of the vision',
                                'ar_helper' => 'عنوان الرؤية',
                            ]
                        ),
                        MultilingualHelper::multilingualTextarea(
                            'vision',
                            'Our Vision',
                            [
                                'rows' => 3,
                                'en_placeholder' => 'Enter company vision in English',
                                'ar_placeholder' => 'أدخل رؤية الشركة بالعربية',
                            ]
                        ),
                    ]),

                Section::make('Core Values')
                    ->schema([
                        Repeater::make('core_values')
                            ->label('Core Values')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => data_get($state, 'title.en') ?: 'Core Value')
                            ->schema([
                                Textarea::make('icon')
                                    ->label('Icon')
                                    ->rows(3)
                                    ->columnSpanFull(),

                                MultilingualHelper::multilingualTextInput(
                                    'title',
                                    'Value',
                                    [
                                        'required' => true,
                                        'maxLength' => 80,
                                        'en_placeholder' => 'e.g., Passion',
                                        'ar_placeholder' => 'مثل: الشغف',
                                    ]
                                ),
                            ])
                            ->columnSpanFull(),
                    ]),

                Section::make('Competitive Advantages')
                    ->schema([
                        MultilingualHelper::multilingualTextInput(
                            'strengths_title',
                            'Strengths Title',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_placeholder' => 'e.g., Our Strengths',
                                'ar_placeholder' => 'مثل: نقاط قوتنا',
                            ]
                        ),
                        MultilingualHelper::multilingualTextInput(
                            'strengths_subtitle',
                            'Strengths Subtitle',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_placeholder' => 'e.g., Competitive Advantages',
                                'ar_placeholder' => 'مثل: المزايا التنافسية',
                            ]
                        ),

                        Repeater::make('competitive_advantages')
                            ->label('Competitive Advantages Items')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => data_get($state, 'title.en') ?: 'Advantage')
                            ->schema([
                                Textarea::make('icon')
                                    ->label('Icon (SVG/HTML)')
                                    ->rows(4)
                                    ->columnSpanFull(),

                                MultilingualHelper::multilingualTextInput(
                                    'title',
                                    'Title',
                                    [
                                        'required' => true,
                                        'maxLength' => 120,
                                        'en_placeholder' => 'e.g., Result-Oriented',
                                        'ar_placeholder' => 'مثل: موجه للنتائج',
                                    ]
                                ),

                                MultilingualHelper::multilingualTextarea(
                                    'description',
                                    'Description',
                                    [
                                        'rows' => 3,
                                        'en_placeholder' => 'Short description in English',
                                        'ar_placeholder' => 'وصف قصير بالعربية',
                                    ]
                                ),
                            ])
                            ->columnSpanFull(),
                    ]),

                Section::make('Contact Information')
                    ->schema([
                        MultilingualHelper::multilingualTextarea(
                            'address',
                            'Address',
                            [
                                'rows' => 6,
                                'en_helper' => 'Full company address (supports multiple lines)',
                                'ar_helper' => 'عنوان الشركة الكامل (يدعم عدة أسطر)',
                            ]
                        ),

                        TextInput::make('phone')
                            ->label('Primary Phone')
                            ->required()
                            ->maxLength(50)
                            ->placeholder('e.g., +966 54 055 2004')
                            ->columnSpanFull(),

                        TextInput::make('phone_secondary')
                            ->label('Secondary Phone (Optional)')
                            ->maxLength(50)
                            ->placeholder('e.g., +966 56 442 6319')
                            ->columnSpanFull(),

                        TextInput::make('whatsapp')
                            ->label('WhatsApp')
                            ->maxLength(50)
                            ->placeholder('e.g., +966 56 442 6319')
                            ->columnSpanFull(),

                        TextInput::make('email')
                            ->label('Email Address')
                            ->required()
                            ->email()
                            ->maxLength(255)
                            ->placeholder('e.g., info@compactod.com')
                            ->columnSpanFull(),
                    ]),

                //add COMPACT VALUES section
                Section::make('COMPACT VALUES')
                    ->schema([
                        TextInput::make('clients_count')
                            ->label('Clients Count')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        TextInput::make('projects_count')
                            ->label('Projects Count')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        TextInput::make('years_experience')
                            ->label('Years Experience')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        TextInput::make('experts_count')
                            ->label('Experts Count')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ]),

                Section::make('Services')
                    ->schema([
                        MultilingualHelper::multilingualTextInput(
                            'services_title',
                            'Services Title',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'The title of the services',
                                'ar_helper' => 'عنوان الخدمات',
                            ]
                        ),
                        MultilingualHelper::multilingualTextInput(
                            'services_subtitle',
                            'Services Subtitle',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'The subtitle of the services',
                                'ar_helper' => 'العنوان الفرعي للخدمات',
                            ]
                        ),
                        MultilingualHelper::multilingualTextInput(
                            'services_badge',
                            'Services Badge',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'The badge of the services',
                                'ar_helper' => 'الباقة للخدمات',
                            ]
                        ),
                        FileUpload::make('services_image')
                            ->label('Services Image')
                            ->image()
                            ->directory('settings')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml'])
                            ->maxSize(5120)
                            ->columnSpanFull(),
                    ]),

                    Section::make('About Company')
                    ->schema([
                        MultilingualHelper::multilingualTextInput(
                            'about_title',
                            'About Title',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'The title of the about',
                                'ar_helper' => 'عنوان الشركة',
                            ]
                        ),
                        MultilingualHelper::multilingualTextarea(
                            'about_description',
                            'About Description',
                            [
                                'required' => true,
                                'en_helper' => 'The subtitle of the about',
                                'ar_helper' => 'العنوان الفرعي للشركة',
                            ]
                        ),
                        MultilingualHelper::multilingualTextInput(
                            'about_badge',
                            'About Badge',
                            [
                                'required' => true,
                                'maxLength' => 255,
                                'en_helper' => 'The badge of the about',
                                'ar_helper' => 'الباقة للشركة',
                            ]
                        ),
                        FileUpload::make('about_image')
                            ->label('About Image')
                            ->image()
                            ->directory('settings')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml'])
                            ->maxSize(5120)
                            ->columnSpanFull(),
                    ]),


                Section::make('Social Media')
                    ->schema([
                        Repeater::make('social_links')
                            ->label('Social Media Links')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['platform'] ?? 'Social Link')
                            ->schema([
                                Select::make('platform')
                                    ->label('Platform')
                                    ->options([
                                        'facebook' => 'Facebook',
                                        'twitter' => 'Twitter',
                                        'linkedin' => 'LinkedIn',
                                        'instagram' => 'Instagram',
                                        'youtube' => 'YouTube',
                                        'snapchat' => 'Snapchat',
                                        'tiktok' => 'TikTok',
                                    ])
                                    ->required()
                                    ->columnSpan(1),
                                \Filament\Forms\Components\TextInput::make('url')
                                    ->label('URL')
                                    ->url()
                                    ->required()
                                    ->placeholder('https://...')
                                    ->columnSpan(2),
                            ])
                            ->columns(3)
                            ->columnSpanFull(),
                    ]),

                    Actions::make([
                        Action::make(__('Save Changes'))
                            ->icon('heroicon-o-check-circle')
                            ->action('saveChanges')
                            ->color('info'),

                    ])->alignEnd(),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $this->saveChanges();
    }

    protected function getFormActions(): array
    {
        return [
            \Filament\Actions\Action::make('save')
                ->label('Save Settings')
                ->submit('save')
                ->color('primary'),
        ];
    }

    public function saveChanges()
    {
        $data = $this->form->getState();

        // Save each setting using data directly as it's already in the correct nested format
        Setting::setValue('site.title', $data['site_title'] ?? ['en' => 'COMPACT', 'ar' => 'COMPACT'], 'json', 'general');
        Setting::setValue('site.logo', $data['logo'] ?? '/assets/logo-DSroQpd9.png', 'image', 'general');
        Setting::setValue('home.hero_title', $data['hero_title'] ?? ['en' => '', 'ar' => ''], 'json', 'home');
        Setting::setValue('home.hero_subtitle', $data['hero_subtitle'] ?? ['en' => '', 'ar' => ''], 'json', 'home');
        Setting::setValue('home.hero_description', $data['hero_description'] ?? ['en' => '', 'ar' => ''], 'json', 'home');
        Setting::setValue('site.mission', $data['mission'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.mission_title', $data['mission_title'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.vision', $data['vision'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.vision_title', $data['vision_title'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('home.strengths_title', $data['strengths_title'] ?? ['en' => '', 'ar' => ''], 'json', 'home');
        Setting::setValue('home.strengths_subtitle', $data['strengths_subtitle'] ?? ['en' => '', 'ar' => ''], 'json', 'home');
        Setting::setValue('home.competitive_advantages', $data['competitive_advantages'] ?? [], 'json', 'home');
        Setting::setValue('home.core_values', $data['core_values'] ?? [], 'json', 'home');
        Setting::setValue('site.address', $data['address'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.phone', $data['phone'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.phone_secondary', $data['phone_secondary'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.email', $data['email'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.social_links', $data['social_links'] ?? [], 'json', 'general');
        Setting::setValue('home.video_url', $data['video_url'] ?? ['en' => '', 'ar' => ''], 'json', 'home');
        Setting::setValue('home.image_cover', $data['image_cover'] ?? ['en' => '', 'ar' => ''], 'json', 'home');
        Setting::setValue('stats.clients_count', $data['clients_count'] ?? ['en' => '', 'ar' => ''], 'json', 'stats');
        Setting::setValue('stats.projects_count', $data['projects_count'] ?? ['en' => '', 'ar' => ''], 'json', 'stats');
        Setting::setValue('stats.years_experience', $data['years_experience'] ?? ['en' => '', 'ar' => ''], 'json', 'stats');
        Setting::setValue('stats.experts_count', $data['experts_count'] ?? ['en' => '', 'ar' => ''], 'json', 'stats');
        Setting::setValue('services.title', $data['services_title'] ?? ['en' => '', 'ar' => ''], 'json', 'services');
        Setting::setValue('services.subtitle', $data['services_subtitle'] ?? ['en' => '', 'ar' => ''], 'json', 'services');
        Setting::setValue('services.badge', $data['services_badge'] ?? ['en' => '', 'ar' => ''], 'json', 'services');
        Setting::setValue('services.image', $data['services_image'] ?? ['en' => '', 'ar' => ''], 'json', 'services');
        Setting::setValue('about.title', $data['about_title'] ?? ['en' => '', 'ar' => ''], 'json', 'about');
        Setting::setValue('about.description', $data['about_description'] ?? ['en' => '', 'ar' => ''], 'json', 'about');
        Setting::setValue('about.badge', $data['about_badge'] ?? ['en' => '', 'ar' => ''], 'json', 'about');
        Setting::setValue('about.image', $data['about_image'] ?? ['en' => '', 'ar' => ''], 'json', 'about');
        Setting::setValue('site.whatsapp', $data['whatsapp'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        // Clear settings cache
        SettingsHelper::clearCache();

        Notification::make()
            ->success()
            ->title('Settings saved successfully')
            ->send();

        // Refresh data from database
        $this->mount();
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}
