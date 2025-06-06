<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetRecentsController extends Controller
{
    public function index()
    {
        $projects = Projet::all();
        $domains = Domaine::all();
        return view('pages.realisations.projets-recents', compact('projects', 'domains'));
    }

    /**
     * Show image from storage
     */
    public function secureImage($id)
    {
        $project = Projet::findOrFail($id);
        if (!$project->image) {
            abort(404);
        }
        $path = storage_path('app/public/' . $project->image);
        if (!file_exists($path)) {
            abort(404);
        }
        // Optional: add auth check here
        return response()->file($path);
    }

    /**
     * Get project details via AJAX
     */
    public function ajaxShow($id)
    {
        $project = Projet::findOrFail($id);
        $similar = Projet::where('domaine', $project->domaine)
            ->where('id', '!=', $project->id)
            ->limit(5)
            ->get(['id', 'titre', 'image']);

        return response()->json([
            'id' => $project->id,
            'titre' => $project->titre,
            'description' => $project->description,
            'domaine' => $project->domaine,
            'image' => $project->image ? url('/secure-image/'.$project->id) : null,
            'x' => $project->coordonnee_x,
            'y' => $project->coordonnee_y,
            'similar' => $similar,
        ]);
    }

    /**
     * Display projects on map
     */
    public function carteProjets()
    {
        $projects = Projet::whereNotNull('coordonnee_x')
            ->whereNotNull('coordonnee_y')
            ->get(['id', 'titre', 'domaine', 'coordonnee_x as x', 'coordonnee_y as y', 'image', 'description']);
        return view('pages.realisations.tous-les-projets', compact('projects'));
    }
}
