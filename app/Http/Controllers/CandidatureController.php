<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidature;
use App\Models\OffreEmploi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Notifications\NewCandidatureNotification;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CandidaturesExport;

class CandidatureController extends Controller
{
    public function store(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telephone' => 'required|string|max:30',
        'domaine' => 'required|string|max:255',
        'autre_domaine' => 'required_if:domaine,Autre|string|max:255|nullable',
        'diplome' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        'post' => 'required|string|max:255',
        'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        'lettre_motivation' => 'required|string',
        'type' => 'required|in:emploi,stage',
    ]);

    // Handle CV upload
    if ($request->hasFile('cv')) {
        $cvPath = $request->file('cv')->store('cvs', 'public');
    } else {
        $cvPath = null;
    }

    // Handle Diplôme upload
    if ($request->hasFile('diplome')) {
        $diplomePath = $request->file('diplome')->store('diplomes', 'public');
    } else {
        $diplomePath = null;
    }

    // Generate slug (optional)
    $slug = Str::slug($request->nom . '-' . now()->timestamp);

    // Determine the final domaine value
    $finalDomaine = $request->domaine;
    if ($request->domaine === 'Autre' && $request->autre_domaine) {
        $finalDomaine = $request->autre_domaine;
    }

    // Save the candidature
    $candidature = Candidature::create([
        'nom' => $request->nom,
        'email' => $request->email,
        'telephone' => $request->telephone,
        'domaine' => $finalDomaine,
        'diplome' => $diplomePath,
        'post' => $request->post,
        'cv' => $cvPath,
        'lettre_motivation' => $request->lettre_motivation,
        'type' => $request->type,
        'slug' => $slug
    ]);

    // Now send the notification with the saved candidature
    $admins = User::where('role', 'admin')->get();
    foreach ($admins as $admin) {
        $admin->notify(new NewCandidatureNotification($candidature));
    }

    return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès.');
}
    public function create()
    {
        $offres = OffreEmploi::all(); // Jib kol offres men base
        return view('pages.recrutement.candidature-spontanee', compact('offres'));
    }

    // Uncomment this method if you want to use it
    public function destroy($id)
    {
        $candidature = Candidature::findOrFail($id);
        $candidature->delete();

        return redirect()->back()->with('success', 'Candidature supprimée avec succès.');
    }

    public function export()
    {
        return Excel::download(new CandidaturesExport, 'candidatures.xlsx');
    }
}