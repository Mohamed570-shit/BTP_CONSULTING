<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\AdminActionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class SpontaneousApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Valider et traiter la candidature (exemple simplifié)
        $request->validate([
            'file' => 'required|file|max:2048',
        ]);

        // Logique pour sauvegarder la candidature ici...

        // Envoyer une notification à tous les admins
        $message = "L'utilisateur {$request->user()->name} a soumis une candidature spontanée.";
        $admins = User::where('is_admin', true)->get();
        Notification::send($admins, new AdminActionNotification($message));

        return redirect()->back()->with('success', 'Candidature envoyée avec succès !');
    }
}
