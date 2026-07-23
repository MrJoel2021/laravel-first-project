<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Home page route
Route::get('/', function () {
    return view('home');
});

// About page route
Route::get('/about', function () {
    return view('about');
});

// Contact page route
Route::get('/contact', function () {
    return view('contact');
});

// Jobs listing page
Route::get('/jobs', [JobController::class, 'index']);

// Show create job form
Route::get('/jobs/create', [JobController::class, 'create']);

// Store new job
Route::post('/jobs', [JobController::class, 'store']);

// Show edit job form
Route::get('/jobs/{id}/edit', [JobController::class, 'edit']);

// Update existing job
Route::patch('/jobs/{id}', [JobController::class, 'update']);

// Delete existing job
Route::delete('/jobs/{id}', [JobController::class, 'destroy']);

// Show one job
Route::get('/jobs/{id}', [JobController::class, 'show']);