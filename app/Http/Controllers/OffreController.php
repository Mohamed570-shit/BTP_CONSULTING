<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function apply(Request $request, $id)
    {
        // Your logic for applying to an offer goes here
        // Example: validate, save candidature, etc.

        return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès !');
    }
}