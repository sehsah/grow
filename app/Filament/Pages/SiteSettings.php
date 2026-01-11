<?php

namespace App\Filament\Pages;

use App\Filament\Helpers\MultilingualHelper;
use App\Helpers\SettingsHelper;
use App\Models\Setting;
use Filament\Forms\Components\FileUpload;
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
            'site_title' => Setting::getValue('site.title', ['en' => 'COMPACT', 'ar' => 'COMPACT']),
            'logo' => Setting::getValue('site.logo', '/assets/logo-DSroQpd9.png'),
            'mission' => Setting::getValue('site.mission', ['en' => '', 'ar' => '']),
            'vision' => Setting::getValue('site.vision', ['en' => '', 'ar' => '']),
            'address' => Setting::getValue('site.address', [
                'en' => "Saudi Arabia Office\nWadi Makkah, King Khalid Road, Riyadh, Kingdom of Saudi Arabia – 12514\n\nEgypt Office\n63 Syria Street, Al Agouza, Giza, Egypt\n+2 010 980 52005",
                'ar' => "مكتب السعودية\nوادي مكة، طريق الملك خالد، الرياض، المملكة العربية السعودية – 12514\n\nمكتب مصر\n63 شارع سوريا، العجوزة، الجيزة، مصر\n+2 010 980 52005"
            ]),
            'phone' => Setting::getValue('site.phone', ['en' => '+966 54 055 2004', 'ar' => '+966 54 055 2004']),
            'phone_secondary' => Setting::getValue('site.phone_secondary', ['en' => '+966 56 442 6319', 'ar' => '+966 56 442 6319']),
            'email' => Setting::getValue('site.email', ['en' => 'info@compactod.com', 'ar' => 'info@compactod.com']),
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
                            ->helperText('Upload your site logo (recommended: SVG or PNG with transparent background)')
                            ->columnSpanFull(),
                    ]),

                Section::make('About Company')
                    ->schema([
                        MultilingualHelper::multilingualTextarea(
                            'mission',
                            'Our Mission',
                            [
                                'rows' => 3,
                                'en_placeholder' => 'Enter company mission in English',
                                'ar_placeholder' => 'أدخل رسالة الشركة بالعربية',
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

                        MultilingualHelper::multilingualTextInput(
                            'phone',
                            'Primary Phone',
                            [
                                'required' => true,
                                'maxLength' => 50,
                                'en_placeholder' => 'e.g., +966 54 055 2004',
                                'ar_placeholder' => 'مثل: +966 54 055 2004',
                            ]
                        ),

                        MultilingualHelper::multilingualTextInput(
                            'phone_secondary',
                            'Secondary Phone (Optional)',
                            [
                                'maxLength' => 50,
                                'en_placeholder' => 'e.g., +966 56 442 6319',
                                'ar_placeholder' => 'مثل: +966 56 442 6319',
                            ]
                        ),

                        \Filament\Schemas\Components\Tabs::make('email_tabs')
                            ->tabs([
                                \Filament\Schemas\Components\Tabs\Tab::make('en')
                                    ->label('English')
                                    ->schema([
                                        \Filament\Forms\Components\TextInput::make('email.en')
                                            ->label('Email Address (English)')
                                            ->required()
                                            ->email()
                                            ->maxLength(255)
                                            ->placeholder('e.g., info@compactod.com'),
                                    ]),
                                \Filament\Schemas\Components\Tabs\Tab::make('ar')
                                    ->label('العربية')
                                    ->schema([
                                        \Filament\Forms\Components\TextInput::make('email.ar')
                                            ->label('Email Address (العربية)')
                                            ->required()
                                            ->email()
                                            ->maxLength(255)
                                            ->placeholder('مثل: info@compactod.com'),
                                    ]),
                            ]),
                    ]),
                    Actions::make([
                        Action::make(__('Save Changes'))
                            ->icon('heroicon-o-check-circle')
                            ->action('saveChanges')
                            ->color('info'),
                        Action::make(__('Restore defaults'))
                            ->icon('heroicon-o-arrow-uturn-left')
                            ->action('restoreDefaults')
                            ->requiresConfirmation()
                            ->modalHeading(__('Restore defaults'))
                            ->modalDescription(__('Are you sure you\'d like to restore defaults? This cannot be undone.'))
                            ->color('danger')

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
        Setting::setValue('site.mission', $data['mission'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.vision', $data['vision'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.address', $data['address'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.phone', $data['phone'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.phone_secondary', $data['phone_secondary'] ?? ['en' => '', 'ar' => ''], 'json', 'general');
        Setting::setValue('site.email', $data['email'] ?? ['en' => '', 'ar' => ''], 'json', 'general');

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
