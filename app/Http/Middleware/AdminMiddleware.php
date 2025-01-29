<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Facades\Session;

// class AdminMiddleware
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         if ($request->user() && $request->user()->Role === 'admin') {
//             return $next($request);
//         }

//         if ($request->expectsJson()) {
//             return response()->json(['error' => 'Unauthorized'], 403);
//         }

//         // Store an error message in the session
//         Session::flash('error', 'You are unauthorized.');

//         // Redirect to the login page or any other appropriate page
//         return redirect('/');
//     }
// }


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        return redirect('/'); // Or wherever you want to redirect non-admin users
    }
}
