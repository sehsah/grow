<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share services globally for header dropdown menu
        View::composer('*', function ($view) {
            $services = Service::where('is_active', true)
                ->orderBy('order', 'asc')
                ->get();
            
            $view->with('services', $services);
        });
    }
}
