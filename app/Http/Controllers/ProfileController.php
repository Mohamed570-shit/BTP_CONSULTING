<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * ProfileController constructor.
     * Applies authentication middleware to all methods.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the user's profile page.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('admin.profile');
    }

    /**
     * Update the authenticated user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if (!$user) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté.');
        }

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        ]);

        // Update user fields
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($validatedData['password']);
        }

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($user->profile_image) {
                Storage::delete('public/' . $user->profile_image);
            }
            // Store new image
            $path = $request->file('profile_image')->store('profiles', 'public');
            $user->profile_image = $path;
        }

        // Save the updated user data
        $user->save();

        // Redirect with success message
        return redirect()->route('admin.profile')->with('success', 'Profil mis à jour avec succès !');
    }
}
