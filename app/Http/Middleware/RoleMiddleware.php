<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is logged in and has a role
        if ($request->user()) {
            // Redirect based on role
            if ($request->user()->role === 'admin') {
                // Allow admin to access admin pages
                return $next($request);
            }

            if ($request->user()->role === 'user') {
                // Redirect to user page if the user is a regular user
                return redirect('/user');
            }
        }

        // If the user is not logged in or doesn't have the correct role, redirect to login
        if (!Auth::check()) {
            // Optionally flash an error message when redirecting
            Session::flash('error', 'You are not authorized to access this page.');
            return redirect('/login');  // Redirect to login page
        }

        // If no role matches, redirect to home or another page
        return redirect('/');  // Default fallback, change as needed
    }
}
