<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        $siteAddress = \App\Helpers\SettingsHelper::site('address', '');
        $sitePhone = \App\Helpers\SettingsHelper::site('phone');
        $sitePhoneSecondary = \App\Helpers\SettingsHelper::site('phone_secondary');
        $siteEmail = \App\Helpers\SettingsHelper::site('email');
        $siteSocialLinks = \App\Helpers\SettingsHelper::site('social_links');
        return view('contact', compact('siteAddress', 'sitePhone', 'sitePhoneSecondary', 'siteEmail', 'siteSocialLinks'));
    }

    /**
     * Handle contact form submission.
     */
    public function store(Request $request)
    {
        // TODO: Implement contact form handling
        // Validate and send email/store contact message

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
