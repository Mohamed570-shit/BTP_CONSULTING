<?php

namespace App\Http\Controllers;

use App\Models\ALaUne;
use Illuminate\Http\Request;

class ALaUneFrontController extends Controller
{
    public function index()
    {
        // Jib ga3 "À la une" m3a les images dyalhom
        $aLaUnes = ALaUne::with('images')->latest()->get();
        
        return view('pages.a_la_une', compact('aLaUnes'));
    }

    public function show($id)
    {
        // Jib "À la une" wahda b id dyalha m3a les images
        $aLaUne = ALaUne::with('images')->findOrFail($id);
        
        return view('pages.a_la_une_detail', compact('aLaUne'));
    }

    // Bash njib les images mn storage
    public function showImage($filename)
    {
        $path = storage_path('app/public/a_la_une_images/' . $filename);
        if (!file_exists($path)) {
            abort(404);
        }
        return response()->file($path);
    }
}