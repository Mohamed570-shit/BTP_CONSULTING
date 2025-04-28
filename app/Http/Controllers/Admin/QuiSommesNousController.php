<?php

namespace App\Http\Controllers\Admin;

use App\Models\Motdg;
use App\Models\Valeur;
use App\Models\Apropos;
use App\Models\Chiffre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class QuiSommesNousController extends Controller
{
        public function update(Request $request)
        {
            $apropos = Apropos::first();
            if (!$apropos) {
                $apropos = new Apropos();
            }
            $apropos->subtitle = $request->subtitle;
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
        public function updateMotdg(Request $request)
        {
            $motdg = Motdg::first() ?? new Motdg();

            $motdg->title = $request->title;
            $motdg->subtitle = $request->subtitle;
            $motdg->welcome = $request->welcome;
            $motdg->mission = $request->mission;
            $motdg->engagement = $request->engagement;
            $motdg->future = $request->future;
            $motdg->director_name = $request->director_name;
            $motdg->director_title = $request->director_title;

            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('motdg', 'public');
                $motdg->image = $path;
            }

            $motdg->save();

            return redirect()->back()->with('success', 'Mot du Directeur Général mis à jour !');
        }
                // values (admin)
                public function storeValeur(Request $request)
                {
                    $request->validate([
                        'icon' => 'required|string|max:255',
                        'title' => 'required|string|max:255', 
                        'description' => 'required|string',
                    ]);

                    Valeur::create([
                        'icon' => $request->icon,
                        'title' => $request->title, 
                        'description' => $request->description,
                    ]);

                    return redirect()->back()->with('success', 'Valeur ajoutée avec succès.');
                }
                
                public function destroyValeur($id)
                {
                    $valeur = \App\Models\Valeur::findOrFail($id);
                    $valeur->delete();

                    return redirect()->back()->with('success', 'Valeur supprimée avec succès.');
                }
                
                public function updateValeur(Request $request, $id)
                {
                    $request->validate([
                        'icon' => 'required|string|max:255',
                        'title' => 'required|string|max:255',
                        'description' => 'required|string',
                    ]);

                    $valeur = Valeur::findOrFail($id);
                    $valeur->update([
                        'icon' => $request->icon,
                        'title' => $request->title,
                        'description' => $request->description,
                    ]);

                    return redirect()->back()->with('success', 'Valeur modifiée avec succès.');
                }
                






                // chiffres clés (admin)
                public function storeChiffre(Request $request)
                {
                    $request->validate([
                        'icon' => 'required|string|max:255',
                        'value' => 'required|string|max:255',
                        'label' => 'required|string|max:255',
                    ]);

                    Chiffre::create([
                        'icon' => $request->icon,
                        'value' => $request->value,
                        'label' => $request->label,
                    ]);

                    return redirect()->back()->with('success', 'Chiffre clé ajouté avec succès.');
                }

                public function updateChiffre(Request $request, $id)
                {
                    $request->validate([
                        'icon' => 'required|string|max:255',
                        'value' => 'required|string|max:255',
                        'label' => 'required|string|max:255',
                    ]);

                    $chiffre = Chiffre::findOrFail($id);
                    $chiffre->update([
                        'icon' => $request->icon,
                        'value' => $request->value,
                        'label' => $request->label,
                    ]);

                    return redirect()->back()->with('success', 'Chiffre clé modifié avec succès.');
                }

                public function destroyChiffre($id)
                {
                    $chiffre = Chiffre::findOrFail($id);
                    $chiffre->delete();

                    return redirect()->back()->with('success', 'Chiffre clé supprimé avec succès.');
                }


                

                public function chiffresPublic()
                {
                    $chiffres = \App\Models\Chiffre::all();
                    return view('pages.qui-sommes-nous.chiffres-cles', compact('chiffres'));
                }
               
            public function valeursPublic()
            {
                $valeurs = Valeur::all();
                return view('pages.qui-sommes-nous.valeurs', compact('valeurs'));
            }
           

            public function aproposPublic()
            {
                $apropos = Apropos::first();
                return view('pages.qui-sommes-nous.apropos', compact('apropos'));
            }
           
            public function showAproposImage($filename)
            {
                $path = 'apropos/' . $filename;
                if (!Storage::disk('public')->exists($path)) {
                    abort(404);
                }
                $file = Storage::disk('public')->get($path);
                $type = Storage::disk('public')->mimeType($path);
                return response($file, 200)->header('Content-Type', $type);
            }
            
            public function directeurPublic()
            {
                $motdg = Motdg::first();
                return view('pages.qui-sommes-nous.directeur', compact('motdg'));
            }

            public function showMotdgImage($filename)
            {
                $path = 'motdg/' . $filename;
                if (!Storage::disk('public')->exists($path)) {
                    abort(404);
                }
                $file = Storage::disk('public')->get($path);
                $type = Storage::disk('public')->mimeType($path);
                return response($file, 200)->header('Content-Type', $type);
            }



}