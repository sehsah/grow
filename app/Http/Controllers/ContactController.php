<?php

namespace App\Http\Controllers;

use App\Helpers\SettingsHelper;
use App\Helpers\TranslationHelper;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

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
        $serviceOptions = \App\Models\Service::all();
        return view('contact', compact(
            'siteAddress',
            'sitePhone',
            'sitePhoneSecondary',
            'siteEmail',
            'siteSocialLinks',
            'serviceOptions'
        ));
    }

    /**
     * Handle contact form submission.
     */
    public function store(Request $request)
    {
        $serviceOptions = \App\Models\Service::all();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'services' => ['nullable', 'array', 'max:10'],
            'message' => ['required', 'string', 'max:2000'],
        ]);
        
        $serviceLabels = collect($validated['services'] ?? [])
            ->map(fn ($key) => $serviceOptions->firstWhere('slug', $key)?->name)
            ->values()
            ->all();

        Mail::to($this->contactRecipient())->send(
            new ContactFormSubmitted(
                [
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'phone' => $validated['phone'] ?? null,
                    'message' => $validated['message'],
                ],
                $serviceLabels
            )
        );

        return redirect()
            ->route('contact')
            ->with('success', TranslationHelper::get(
                'contact.success',
                'Thank you! Your request has been received. We will contact you shortly.'
            ));
    }

    /**
     * Resolve the recipient address for contact emails.
     */
    private function contactRecipient(): string
    {
        $fallback = config('mail.from.address');
        $siteEmail = SettingsHelper::site('email', $fallback);

        return is_string($siteEmail) ? $siteEmail : (string) $fallback;
    }
}
