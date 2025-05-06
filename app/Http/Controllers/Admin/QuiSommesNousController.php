<?php

namespace App\Http\Controllers\Admin;

use App\Models\Motdg;
use App\Models\Valeur;
use App\Models\Apropos;
use App\Models\Chiffre;
use App\Models\Politique;
use App\Models\Organigramme;
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
                $path = storage_path('app/public/apropos/' . $filename);
                if (!file_exists($path)) {
                    abort(404);
                }
                return response()->file($path);
            }

            
            public function directeurPublic()
            {
                $motdg = Motdg::first();
                return view('pages.qui-sommes-nous.directeur', compact('motdg'));
            }

            public function showMotdgImage($filename)
            {
                $path = storage_path('app/public/motdg/' . $filename);
                if (!file_exists($path)) {
                    abort(404);
                }
                return response()->file($path);
            }


            public function storePolitique(Request $request)
            {
                $data = $request->only(['title', 'description']);
                if ($request->hasFile('image')) {
                    $data['image'] = $request->file('image')->store('politiques', 'public');
                    $data['image'] = basename($data['image']);
                }
                Politique::create($data);
                return back()->with('success', 'Politique ajoutée avec succès');
            }

            public function updatePolitique(Request $request, $id)
            {
                $politique = Politique::findOrFail($id);
                $data = $request->only(['title', 'description']);
                if ($request->hasFile('image')) {
                    $data['image'] = $request->file('image')->store('politiques', 'public');
                    $data['image'] = basename($data['image']);
                }
                $politique->update($data);
                return back()->with('success', 'Politique modifiée avec succès');
            }

            public function destroyPolitique($id)
            {
                $politique = Politique::findOrFail($id);
                $politique->delete();
                return back()->with('success', 'Politique supprimée avec succès');
            }



            public function storeOrganigramme(Request $request)
            {
                // Only allow if no image exists
                if (Organigramme::count() > 0) {
                    return back()->with('error', 'Vous ne pouvez ajouter qu\'une seule image.');
                }
                $request->validate([
                    'image' => 'required|image|max:2048'
                ]);
                $data = [];
                if ($request->hasFile('image')) {
                    $data['image'] = $request->file('image')->store('organigrammes', 'public');
                    $data['image'] = basename($data['image']);
                }
                Organigramme::create($data);
                return back()->with('success', 'Image ajoutée avec succès');
            }

            public function updateOrganigramme(Request $request, $id)
            {
                $organigramme = Organigramme::findOrFail($id);
                $request->validate([
                    'image' => 'required|image|max:2048'
                ]);
                $data = [];
                if ($request->hasFile('image')) {
                    $data['image'] = $request->file('image')->store('organigrammes', 'public');
                    $data['image'] = basename($data['image']);
                }
                $organigramme->update($data);
                return back()->with('success', 'Image modifiée avec succès');
            }

            public function destroyOrganigramme($id)
            {
                $organigramme = Organigramme::findOrFail($id);
                $organigramme->delete();
                return back()->with('success', 'Image supprimée avec succès');
            }
            public function organigrammePage()
{
    $organigramme = Organigramme::first();
    return view('pages.qui-sommes-nous.organigramme', compact('organigramme'));
}

// ... existing code ...
public function showOrganigrammeImage($filename)
{
    $path = storage_path('app/public/organigrammes/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
}
// ... existing code ...
// ... existing code ...


public function politiquesHumainesPage()
{
    $politiques = Politique::all();
    return view('pages.realisations.politiques-humaines', compact('politiques'));
}

    public function showPolitiqueImage($filename)
    {
        $path = storage_path('app/public/politiques/' . $filename);
        if (!file_exists($path)) {
            abort(404);
        }
        return response()->file($path);
    }

    // ... existing code ...
}


