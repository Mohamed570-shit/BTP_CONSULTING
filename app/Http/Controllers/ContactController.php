<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('ahaddouchhajar8@gmail.com')->send(new ContactMail(
            $validated['name'],
            $validated['email'],
            $validated['subject'],
            $validated['message']
        ));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
