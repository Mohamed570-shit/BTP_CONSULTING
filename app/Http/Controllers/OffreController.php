<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function apply(Request $request, $id)
    {

        return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès !');
    }
}