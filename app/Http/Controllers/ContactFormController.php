<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to database
        $contactForm = new ContactForm();
        $contactForm->name = $request->name;
        $contactForm->email = $request->email;
        $contactForm->subject = $request->subject;
        $contactForm->message = $request->message;
        $contactForm->save();

        // Send email
        Mail::send('emails.contact', ['contact' => $contactForm], function ($m) use ($contactForm) {
            $m->from($contactForm->email, $contactForm->name);
            $m->to('your-email@example.com')->subject($contactForm->subject);
        });

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
