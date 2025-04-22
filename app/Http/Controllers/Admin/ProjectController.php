<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Applique le middleware d'authentification.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Affiche la liste des projets.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projets = Projet::all();
        return view('admin.projects', compact('projets'));
    }

    /**
     * Affiche le formulaire pour créer un nouveau projet.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Enregistre un nouveau projet.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|in:en cours,terminé',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'num_marche_interne' => 'nullable|integer',
            'num_marche_externe' => 'nullable|string|max:255',
            'maitre_ouvrage' => 'nullable|string|max:255',
            'objet_marche' => 'nullable|string',
            'date_osc' => 'nullable|date',
            'delai_execution' => 'nullable|integer',
            'lieu_execution' => 'nullable|string|max:255',
            'type_marche' => 'nullable|string|max:255',
            'domaine' => 'nullable|string|max:255',
            'coordonnee_x' => 'nullable|numeric',
            'coordonnee_y' => 'nullable|numeric',
        ]);

        $projet = new Projet();
        $projet->titre = $validated['titre'];
        $projet->slug = Str::slug($validated['titre']);
        $projet->description = $validated['description'];
        $projet->status = $validated['status'];
        $projet->num_marche_interne = $validated['num_marche_interne'];
        $projet->num_marche_externe = $validated['num_marche_externe'];
        $projet->maitre_ouvrage = $validated['maitre_ouvrage'];
        $projet->objet_marche = $validated['objet_marche'];
        $projet->date_osc = $validated['date_osc'];
        $projet->delai_execution = $validated['delai_execution'];
        $projet->lieu_execution = $validated['lieu_execution'];
        $projet->type_marche = $validated['type_marche'];
        $projet->domaine = $validated['domaine'];
        $projet->coordonnee_x = $validated['coordonnee_x'];
        $projet->coordonnee_y = $validated['coordonnee_y'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projets', 'public');
            $projet->image = $path;
        }

        $projet->save();

        return redirect()->route('admin.projects')->with('success', 'Projet créé avec succès !');
    }

  /**
 * Affiche les détails d'un projet.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    $projet = Projet::findOrFail($id);

    if (request()->expectsJson() || request()->ajax()) {
        return response()->json($projet);
    }

    return response()->view('admin.projects.show', compact('projet'));
}

    /**
     * Affiche le formulaire pour modifier un projet.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $projet = Projet::findOrFail($id);
        return view('admin.projects.edit', compact('projet'));
    }

    /**
     * Met à jour un projet existant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Projet $projet)
{
    $validated = $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'status' => 'required|string|in:en cours,terminé',
        'num_marche_interne' => 'nullable|integer',
        'num_marche_externe' => 'nullable|string|max:255',
        'maitre_ouvrage' => 'nullable|string|max:255',
        'objet_marche' => 'required|string',
        'date_osc' => 'required|date',
        'delai_execution' => 'required|string',
        'lieu_execution' => 'required|string',
        'type_marche' => 'required|string',
        'domaine' => 'required|string',
        'coordonnee_x' => 'required|numeric',
        'coordonnee_y' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);


    $baseSlug = Str::slug($validated['titre']);
    $slug = $baseSlug;
    $counter = 1;

    while (Projet::where('slug', $slug)->where('id', '!=', $projet->id)->exists()) {
        $slug = $baseSlug . '-' . $counter;
        $counter++;
    }

    $projet->titre = $validated['titre'];
    $projet->slug = $slug;
    $projet->description = $validated['description'];
    $projet->status = $validated['status'];
    $projet->num_marche_interne = $validated['num_marche_interne'];
    $projet->num_marche_externe = $validated['num_marche_externe'];
    $projet->maitre_ouvrage = $validated['maitre_ouvrage'];
    $projet->objet_marche = $validated['objet_marche'];
    $projet->date_osc = $validated['date_osc'];
    $projet->delai_execution = $validated['delai_execution'];
    $projet->lieu_execution = $validated['lieu_execution'];
    $projet->type_marche = $validated['type_marche'];
    $projet->domaine = $validated['domaine'];
    $projet->coordonnee_x = $validated['coordonnee_x'];
    $projet->coordonnee_y = $validated['coordonnee_y'];

    if ($request->hasFile('image')) {
        if ($projet->image) {
            Storage::delete('public/' . $projet->image);
        }
        $path = $request->file('image')->store('projets', 'public');
        $projet->image = $path;
    }

    $projet->save();

    return redirect()->route('admin.projects')->with('success', 'Projet mis à jour avec succès !');
}
    /**
     * Supprime un projet.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);

        if ($projet->image) {
            Storage::delete('public/' . $projet->image);
        }

        $projet->delete();

        return redirect()->route('admin.projects')->with('success', 'Projet supprimé avec succès !');
    }
}