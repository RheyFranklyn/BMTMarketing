<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Facades\Session;

// class UserMiddleware
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         if ($request->user() && $request->user()->Role === 'user') {
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
//}

// app/Http/Middleware/IsUser.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has the role of 'user'
        if (Auth::check() && Auth::user()->role === 'user') {
            return $next($request);
        }

        // Redirect or send error response if not a user
        return redirect('/'); // You can redirect them elsewhere or show an error page
    }
}
