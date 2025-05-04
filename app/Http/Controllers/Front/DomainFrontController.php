<?php

namespace App\Http\Controllers\Front;

use App\Models\Domaine;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DomainFrontController extends Controller
{
    public function show($id)
    {
        $domaine = Domaine::with(['cartes', 'images'])->findOrFail($id);
        return view('pages.domains_pages', compact('domaine'));
    }
    

    public function showDomainImage($filename)
    {
        $path = 'domaines/' . $filename;
        if (!Storage::disk('public')->exists($path)) {
            abort(404);
        }
        $file = Storage::disk('public')->get($path);
        $type = Storage::disk('public')->mimeType($path);
        return response($file, 200)->header('Content-Type', $type);
    }

}
