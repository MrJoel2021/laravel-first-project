<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;

// Static pages
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

// Show register page
Route::get('/register', [RegisteredUserController::class, 'create']);

// Store/register new user
Route::post('/register', [RegisteredUserController::class, 'store']);

// Show login page
Route::get('/login', [SessionController::class, 'create']);

// Login user
Route::post('/login', [SessionController::class, 'store']);

// Logout user
Route::post('/logout', [SessionController::class, 'destroy']);

// Job routes grouped under JobController
Route::controller(JobController::class)->group(function () {
    // Show all jobs
    Route::get('/jobs', 'index');

    // Show create job form
    Route::get('/jobs/create', 'create');

    // Store new job
    Route::post('/jobs', 'store');

    // Show edit form
    Route::get('/jobs/{job}/edit', 'edit');

    // Update job
    Route::patch('/jobs/{job}', 'update');

    // Delete job
    Route::delete('/jobs/{job}', 'destroy');

    // Show one job
    Route::get('/jobs/{job}', 'show');
});