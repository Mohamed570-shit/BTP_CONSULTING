<?php

namespace App\Http\Controllers\Admin;

use App\Models\Apropos;
use App\Models\Organigramme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuiSommesNousController extends Controller
{
    public function update(Request $request)
    {
        // Example update logic for apropos_btpc table
        $apropos = Apropos::first();
        if (!$apropos) {
            $apropos = new Apropos();
        }

        $apropos->main_title = $request->main_title;
        $apropos->description = $request->description;
        $apropos->domaines = $request->domaines;
        $apropos->approche = $request->approche;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('apropos', 'public');
            $apropos->image = $path;
        }

        $apropos->save();

        return redirect()->back()->with('success', 'Section À propos mise à jour avec succès.');
    }
    

}