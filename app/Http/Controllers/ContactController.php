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
        $serviceOptions = $this->serviceOptions();

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
        $serviceOptions = $this->serviceOptions();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'services' => ['nullable', 'array', 'max:10'],
            'services.*' => [Rule::in(array_keys($serviceOptions))],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        $serviceLabels = collect($validated['services'] ?? [])
            ->map(fn ($key) => TranslationHelper::get($serviceOptions[$key], $serviceOptions[$key]))
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
     * Available service options keyed by slug to translation key.
     */
    private function serviceOptions(): array
    {
        return [
            'organizational-development' => 'contact.service_od',
            'crm' => 'contact.service_crm',
            'outsourcing' => 'contact.service_outsourcing',
            'it-development' => 'contact.service_it',
        ];
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
