<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Switch application language
     */
    public function switch(Request $request, string $locale)
    {
        // Validate locale
        if (!in_array($locale, ['en', 'ar'])) {
            $locale = 'en';
        }

        // Set locale in session
        Session::put('locale', $locale);
        
        // Set locale for current request
        App::setLocale($locale);

        // Redirect back to the previous page or home
        return redirect()->back();
    }
}
