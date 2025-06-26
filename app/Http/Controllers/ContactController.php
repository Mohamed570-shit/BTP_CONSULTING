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
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
        'from_company' => 'required|string|in:oui,non',
        'company_name' => 'nullable|string|max:255',
    ]);

    // Envoi du mail
    Mail::to('ahaddouchhajar8@gmail.com')->send(new ContactMail(
        $validated['name'],
        $validated['email'],
        $validated['subject'],
        $validated['message'],
        $validated['from_company'],
        $validated['company_name']
    ));

    return back()->with('success', 'Votre message a été envoyé avec succès !');
}}