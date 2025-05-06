<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// class CheckRole
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @param  string  $role
//      * @return mixed
//      */
//     public function handle(Request $request, Closure $next, $role)
//     {
//         if (!$request->user() || $request->user()->role !== $role) {
//             abort(403, 'Unauthorized action.');
//         }

//         return $next($request);
//     }
// }namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            return redirect('/login')->with('error', 'Accès refusé.');
        }
        return $next($request);
    }
}