<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\AdminActionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Models\Candidature;

class SpontaneousApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Valider et traiter la candidature
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'cv' => 'required|file|mimes:pdf|max:2048',
            'message' => 'nullable|string',
        ]);

        // Stocker le CV
        $cvPath = $request->file('cv')->store('cvs', 'public');

        // Sauvegarder la candidature dans la base de données
        Candidature::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'cv' => $cvPath,
            'message' => $validated['message'] ?? null,
            'offre_id' => null, // This is important!
        ]);

        // Envoyer une notification à tous les admins
        $admins = User::where('is_admin', true)->get();
        $message = "L'utilisateur {$validated['name']} a soumis une candidature spontanée.";
        Notification::send($admins, new AdminActionNotification($message));

        return redirect()->back()->with('success', 'Candidature envoyée avec succès !');
    }
}
// ... existing code ...