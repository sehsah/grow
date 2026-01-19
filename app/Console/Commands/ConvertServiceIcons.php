<?php

namespace App\Console\Commands;

use App\Models\ServiceItem;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ConvertServiceIcons extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:convert-service-icons';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert raw SVG icons in ServiceItems to files';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $items = ServiceItem::all();
        $disk = Storage::disk('public');
        $directory = 'services/items';

        foreach ($items as $item) {
            $icon = $item->icon;

            // Check if icon looks like an SVG tag
            if ($icon && str_contains($icon, '<svg')) {
                $this->info("Converting icon for: " . $item->getTranslation('title', 'en'));

                // Generate a filename
                $title = $item->getTranslation('title', 'en');
                $slug = Str::slug($title);
                $filename = "{$directory}/{$slug}.svg";
                
                // If file exists, try to make it unique
                $counter = 1;
                while ($disk->exists($filename)) {
                    $filename = "{$directory}/{$slug}-{$counter}.svg";
                    $counter++;
                }

                // Save file
                $disk->put($filename, $icon);

                // Update record
                $item->update(['icon' => $filename]);
                
                $this->info("Saved to: {$filename}");
            } else {
                $this->info("Skipping (already a path or empty): " . $item->getTranslation('title', 'en'));
            }
        }

        $this->info('Done.');
    }
}
