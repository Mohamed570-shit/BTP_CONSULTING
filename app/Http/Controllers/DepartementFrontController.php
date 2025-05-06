<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementFrontController extends Controller
{
    
public function show($id)
{
    $departement = Departement::with('cartDepartements')->findOrFail($id);
    $departements = Departement::all();
    return view('pages.departement_front', compact('departement', 'departements'));
}
// ... existing code ...
public function showDepartementImage($filename)
{
    $path = storage_path('app/public/departements/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
}
// ... existing code ...
}