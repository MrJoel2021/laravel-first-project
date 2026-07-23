<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    // Show the register page
    public function create()
    {
        return view('auth.register');
    }

    // Store/register a new user
    public function store()
    {
        // Validate the registration form
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
        ]);

        // Hash the password before saving it
        $attributes['password'] = Hash::make($attributes['password']);

        // Create the user
        $user = User::create($attributes);

        // Log the user in automatically
        Auth::login($user);

        // Send the user to the jobs page
        return redirect('/jobs');
    }
}