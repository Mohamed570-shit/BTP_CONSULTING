<?php

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class LoginController extends Controller
// {
//     public function showLoginForm()
//     {
//         return view('auth.login');
//     }

//     public function login(Request $request)
//     {
//         $credentials = $request->validate([
//             'email' => ['required', 'email'],
//             'password' => ['required'],
//         ]);

//         if (Auth::attempt($credentials)) {
//             $user = Auth::user();

//             if ($user->role === 'admin') {
//                 $request->session()->regenerate();
//                 return redirect()->intended('/admin/dashboard');
//             }

//             // Si l'utilisateur n'est pas un admin, on le déconnecte
//             Auth::logout();
//             return back()->withErrors([
//                 'email' => 'Vous n\'avez pas les droits d\'accès nécessaires.',
//             ]);
//         }

//         return back()->withErrors([
//             'email' => 'Les informations de connexion sont incorrectes.',
//         ]);
//     }

//     public function logout(Request $request)
//     {
//         Auth::logout();
//         $request->session()->invalidate();
//         $request->session()->regenerateToken();
//         return redirect('/');
//     }
// }<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $request->session()->regenerate();

            if ($user->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } elseif ($user->role === 'rh') {
                return redirect()->intended('rh/dashboard');
            } elseif ($user->role === 'assistant') {
                return redirect()->intended('/admin/projects');
            } else {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'You do not have the necessary access rights.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'The login information is incorrect.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}