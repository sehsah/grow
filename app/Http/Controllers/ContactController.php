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
        return view('contact');
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
