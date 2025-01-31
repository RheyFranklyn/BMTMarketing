<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

// Automatically logout if the user is logged in and tries to visit the login page
Route::get('/', function () {
    if (Auth::check()) {
        Auth::logout(); // Log the user out
        session()->invalidate(); // Invalidate the session
        session()->regenerateToken(); // Regenerate CSRF token to prevent attacks
    }

    return view('auth.login'); // Show the login page
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard'); // Return the view that extends 'admin.admin-dashboard'
})->name('admin.dashboard');

require __DIR__ . '/auth.php';
