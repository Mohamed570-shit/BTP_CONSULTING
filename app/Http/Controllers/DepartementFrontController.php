<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementFrontController extends Controller
{
    public function show($id)
    {
        $departement = Departement::with('cartDepartements')->findOrFail($id);
        // Pass all departements for the navbar
        $departements = Departement::all();
        return view('pages.departement_front', compact('departement', 'departements'));
    }
}