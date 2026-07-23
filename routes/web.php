<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Static pages
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

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