<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidature;
use App\Models\User;
use App\Notifications\NewCandidatureNotification;
// ... existing code ...
class CandidatureController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'cv' => 'required|file|mimes:pdf',
            'message' => 'nullable|string',
            'offre_id' => 'required|exists:offre_emplois,id', // hna zidt validation dyal offre_id
        ]);

        // T7et CV f dossier storage/public/cvs
        $cvPath = $request->file('cv')->store('cvs', 'public');

        // Tssajjal candidature f la base
        $candidature = Candidature::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'cv' => $cvPath,
            'message' => $validated['message'] ?? null,
            'offre_id' => $validated['offre_id'], // hna zidt offre_id
        ]);

        // T3ayet l-admin w tsift lih notification
        $admin = User::where('role', 'admin')->first();
        if ($admin) {
            $admin->notify(new NewCandidatureNotification($candidature));
        }

        // Redirect b message de succès
        return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès !');
    }
}
// ... existing code ...
