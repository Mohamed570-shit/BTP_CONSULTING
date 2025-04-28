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
            'post' => 'required|string|max:255',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'lettre_motivation' => 'required|string',
        ]);

        // Handle CV upload
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');
        } else {
            $cvPath = null;
        }

        // Generate slug (optional)
        $slug = Str::slug($request->nom . '-' . now()->timestamp);

        // Save to database
        $candidature = new Candidature();
        $candidature->nom = $request->nom;
        $candidature->email = $request->email;
        $candidature->telephone = $request->telephone;
        $candidature->post = $request->post;
        $candidature->cv = $cvPath;
        $candidature->lettre_motivation = $request->lettre_motivation;
        $candidature->slug = $slug;
        $candidature->save();

        // Save the candidature first!
        $candidature = Candidature::create([
            'nom' => $request->nom,
            'email' => $request->email,
            // ... other fields ...
        ]);

        // Now send the notification with the saved candidature
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new \App\Notifications\NewCandidatureNotification($candidature));
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
