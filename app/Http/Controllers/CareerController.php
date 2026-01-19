<?php

namespace App\Http\Controllers;

use App\Helpers\SettingsHelper;
use App\Helpers\TranslationHelper;
use App\Mail\CareerApplicationSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    /**
     * Display the career/jobs listing page.
     */
    public function index()
    {
        return view('career');
    }

    /**
     * Handle career form submission.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'career' => ['required', 'string', 'max:150'],
            'details' => ['nullable', 'string', 'max:2000'],
            'cv' => ['required', 'file', 'mimes:pdf,doc,docx,png,jpg,jpeg', 'max:8192'],
        ]);

        $cvFile = $request->file('cv');

        Mail::to($this->careerRecipient())->send(
            new CareerApplicationSubmitted(
                [
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'phone' => $validated['phone'],
                    'career' => $validated['career'],
                    'details' => $validated['details'] ?? '',
                ],
                $cvFile
            )
        );

        return redirect()
            ->route('career')
            ->with('success', TranslationHelper::get(
                'career.success',
                'Thank you for your interest! We have received your application.'
            ));
    }

    /**
     * Display a specific job posting.
     */
    public function show(string $id)
    {
        // TODO: Implement individual job posting view
        return view('career.show', compact('id'));
    }

    /**
     * Resolve the recipient address for career applications.
     */
    private function careerRecipient(): string
    {
        $fallback = config('mail.from.address');
        $siteEmail = SettingsHelper::site('email', $fallback);

        return is_string($siteEmail) ? $siteEmail : (string) $fallback;
    }
}
