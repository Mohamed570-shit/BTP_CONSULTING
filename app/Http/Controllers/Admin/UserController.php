<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Applique le middleware d'authentification.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Affiche la liste des utilisateurs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    /**
     * Affiche le formulaire pour créer un nouvel utilisateur.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Enregistre un nouvel utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'role' => 'required|in:admin,rh,assistant',
        ]);

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ];

        // Only add profile_image if a file was uploaded
        if ($request->hasFile('profile_image')) {
            $userData['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }

        // Create the user
        User::create($userData);

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur ajouté avec succès');
    }

    /**
     * Met à jour un utilisateur existant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
{
    if (auth()->user()->role !== 'admin') {
        return redirect()->route('admin.dashboard')->with('error', 'Vous n\'êtes pas autorisé à modifier des utilisateurs.');
    }

    $user = User::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed',
        'role' => 'required|string|in:admin,rh,assistant',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    dd($request->all()); // Vérifiez les données envoyées

    // ...
}
    /**
     * Affiche le formulaire pour modifier un utilisateur.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Supprime un utilisateur.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->profile_image) {
            Storage::delete('public/' . $user->profile_image);
        }
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur supprimé avec succès !');
    }
}
