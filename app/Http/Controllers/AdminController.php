<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Motdg;
use App\Models\Valeur;
use App\Models\Apropos;
use App\Models\Chiffre;
use App\Models\Domaine;
use App\Models\Politique;
use App\Models\Departement;
use App\Models\Organigramme;
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
            $politiques = Politique::all();
            $organigramme = Organigramme::first();

            return view('admin.about', compact('apropos', 'motdg', 'valeurs', 'chiffres','politiques', 'organigramme'));
        }
        public function showAproposImage($filename) //image de propos
        {
            $path = storage_path('app/public/apropos/' . $filename);
            if (!file_exists($path)) {
                abort(404);
            }
            return response()->file($path);
        }

        public function showMotdgImage($filename) //image mot de directeure
        {
            $path = storage_path('app/public/motdg/' . $filename);
            if (!file_exists($path)) {
                abort(404);
            }
            return response()->file($path);
        }
        public function politiqueImage($filename) //image des politiques
        {
            $path = storage_path('app/public/politiques/' . $filename);
            if (!file_exists($path)) {
                abort(404);
            }
            return response()->file($path);
        }
        public function organigrammeImage($filename) //image de l'organigramme
        {
            $path = storage_path('app/public/organigrammes/' . $filename);
            if (!file_exists($path)) {
                abort(404);
            }
            return response()->file($path);
        }

        
        // les domaine
        public function domains()
        {
            $domaines = Domaine::with(['cartes', 'images'])->get();
            return view('admin.domains', compact('domaines'));
        }
        public function showDomainImage($filename)
        {
            $path = storage_path('app/public/domaines/' . $filename);
            if (!file_exists($path)) {
                abort(404);
            }
            return response()->file($path);
        }


    public function projects()
    {
        return view('admin.projects');
    }

    
        // les departements
        public function departments()
        {
            $departements = Departement::with('cartDepartements')->get();
            return view('admin.departments', compact('departements'));
        }
        public function showCartImage($filename)
        {
            $path = storage_path('app/public/cart_images/' . $filename);
            if (!file_exists($path)) {
                abort(404);
            }
            return response()->file($path);
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