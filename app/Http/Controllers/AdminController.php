<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Motdg;
use App\Models\Valeur;
use App\Models\Apropos;
use App\Models\Chiffre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\SpontaneousApplication; // Ajout de l'import manquant

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function index()
    {
        $applications = \App\Models\SpontaneousApplication::latest()->get();
        return view('admin.spontaneous-applications', compact('applications'));
    }

    // Méthode pour la page des notifications
    public function notifications()
    {
        Auth::user()->unreadNotifications->markAsRead();
        return view('admin.notifications'); // À créer
    }

    // Méthode pour la page des candidatures spontanées
    public function spontaneousApplications()
    {
        $applications = SpontaneousApplication::latest()->get();
        return view('admin.spontaneous-applications', compact('applications'));
    }
    
    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

        // quisommenous (admin)
        
        public function about()
        {
            $apropos = Apropos::first();
            $motdg = Motdg::first();
            $valeurs = Valeur::all();
            $chiffres = Chiffre::all();

            return view('admin.about', compact('apropos', 'motdg', 'valeurs', 'chiffres'));
        }
        public function showAproposImage($filename) //image de propos
        {
            $path = 'apropos/' . $filename;
            if (!Storage::disk('public')->exists($path)) {
                abort(404);
            }
            $file = Storage::disk('public')->get($path);
            $type = Storage::disk('public')->mimeType($path);
            return response($file, 200)->header('Content-Type', $type);
        }     
        public function showMotdgImage($filename) //image du mot du directeur
        {
            $path = 'motdg/' . $filename;
            if (!Storage::disk('public')->exists($path)) {
                abort(404);
            }
            $file = Storage::disk('public')->get($path);
            $type = Storage::disk('public')->mimeType($path);
            return response($file, 200)->header('Content-Type', $type);
        }

    public function domains()
    {
        return view('admin.domains');
    }

    public function projects()
    {
        return view('admin.projects');
    }

    public function departments()
    {
        return view('admin.departments');
    }

    public function jobs()
    {
        return view('admin.jobs');
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin,rh,assistant'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur créé avec succès');
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,rh,assistant'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ]);

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|string|min:8'
            ]);
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        }

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur mis à jour avec succès');
    }

    public function deleteUser(User $user)
    {
        if (Auth::id() === $user->id) {
            return back()->with('error', 'Vous ne pouvez pas supprimer votre propre compte');
        }

        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Utilisateur supprimé avec succès');
    }

    public function showUserCode(User $user)
    {
        return view('admin.users.show-code', compact('user'));
    }
}