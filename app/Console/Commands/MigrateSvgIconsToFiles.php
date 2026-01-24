<?php

namespace App\Console\Commands;

use App\Models\Setting;
use App\Models\WorkingProcess;
use App\Models\TargetField;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MigrateSvgIconsToFiles extends Command
{
    protected $signature = 'app:migrate-svg-icons';
    protected $description = 'Migrate SVG icon strings in settings and models to files';

    public function handle()
    {
        $this->info('Migrating settings...');
        $this->migrateSetting('home.core_values');
        $this->migrateSetting('home.competitive_advantages');

        $this->info('Migrating WorkingProcess models...');
        $this->migrateModelIcons(WorkingProcess::class, 'working_processes');

        $this->info('Migrating TargetField models...');
        $this->migrateModelIcons(TargetField::class, 'target_fields');

        $this->info('Migration completed.');
    }

    private function migrateSetting($key)
    {
        $setting = Setting::where('key', $key)->first();
        if (!$setting || !is_array($setting->value)) {
            $this->warn("Setting $key not found or not an array.");
            return;
        }

        $items = $setting->value;
        $updated = false;

        foreach ($items as &$item) {
            if (isset($item['icon']) && is_string($item['icon']) && str_starts_with(trim($item['icon']), '<svg')) {
                $filename = 'icon-' . Str::random(10) . '.svg';
                $path = 'settings/' . $filename;
                
                Storage::disk('public')->put($path, trim($item['icon']));
                
                $item['icon'] = $path;
                $updated = true;
                $this->info("Migrated setting icon to $path");
            }
        }

        if ($updated) {
            $setting->value = $items;
            $setting->save();
        }
    }

    private function migrateModelIcons($modelClass, $directory)
    {
        $records = $modelClass::all();
        foreach ($records as $record) {
            if (isset($record->icon) && is_string($record->icon) && str_starts_with(trim($record->icon), '<svg')) {
                $filename = 'icon-' . Str::random(10) . '.svg';
                $path = $directory . '/' . $filename;
                
                Storage::disk('public')->put($path, trim($record->icon));
                
                $record->icon = $path;
                $record->save();
                $this->info("Migrated " . class_basename($modelClass) . " ID {$record->id} icon to $path");
            }
        }
    }
}
