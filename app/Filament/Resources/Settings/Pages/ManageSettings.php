<?php

namespace App\Filament\Resources\Settings\Pages;

use App\Filament\Resources\Settings\SettingResource;
use Filament\Resources\Pages\Page;

class ManageSettings extends Page
{
    protected static string $resource = SettingResource::class;

    protected string $view = 'filament.resources.settings.pages.manage-settings';
}
