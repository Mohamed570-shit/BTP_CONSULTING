<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OffreEmploi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['offresEmploi']);
    }

    public function offresEmploi()
    {
        $offres = OffreEmploi::all();
        Log::info('Offres fetched: ' . $offres->count());
        return view('pages.recrutement.offres-emploi', compact('offres'));
    }

    public function index()
    {
        $offres = OffreEmploi::all();
        return view('admin.jobs.index', compact('offres'));
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'nullable|string|max:255',
            'type' => 'nullable|in:CDI,CDD,Stage,Freelance',
            'date_expiration' => 'nullable|date|after:today',
        ]);

        try {
            OffreEmploi::create($validated);
            return redirect()->route('jobs.index')->with('success', 'Offre créée !');
        } catch (\Exception $e) {
            Log::error('Store error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Erreur: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $offre = OffreEmploi::findOrFail($id);
        return view('admin.jobs.edit', compact('offre'));
    }

    public function update(Request $request, $id)
    {
        Log::info('Update called', $request->all());
        $offre = OffreEmploi::findOrFail($id);
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'nullable|string|max:255',
            'type' => 'nullable|in:CDI,CDD,Stage,Freelance',
            'date_expiration' => 'nullable|date|after:today',
        ]);

        try {
            $offre->update($validated);
            return redirect()->route('jobs.index')->with('success', 'Offre mise à jour !');
        } catch (\Exception $e) {
            Log::error('Update error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Erreur: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $offre = OffreEmploi::findOrFail($id);
        try {
            $offre->candidatures()->delete();
            $offre->delete();
            return redirect()->route('jobs.index')->with('success', 'Offre supprimée !');
        } catch (\Exception $e) {
            Log::error('Destroy error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Erreur: ' . $e->getMessage());
        }
    }}