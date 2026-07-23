<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    // Show the login page
    public function create()
    {
        return view('auth.login');
    }

    // Log the user in
    public function store()
    {
        // Validate email and password from the form
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Try to log in with those details
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Wrong Credentials',
            ]);
        }

        // Regenerate session for security
        request()->session()->regenerate();

        // Send user to jobs page
        return redirect('/jobs');
    }

    // Log the user out
    public function destroy()
    {
        // Log out the current user
        Auth::logout();

        // Remove old session data
        request()->session()->invalidate();

        // Create a new CSRF token
        request()->session()->regenerateToken();

        // Send user back to home page
        return redirect('/');
    }
}