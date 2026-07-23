<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

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

// Jobs listing page route
Route::get('/jobs', function () {
    // Load jobs with their employer and show 3 jobs per page
    $jobs = Job::with('employer')->paginate(3);

    // Send the jobs to the jobs.blade.php view
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

// Single job page route
Route::get('/jobs/{id}', function ($id) {
    // Find the job in the database.
    // If it does not exist, Laravel automatically shows 404 Not Found.
    $job = Job::findOrFail($id);

    // Send the selected job to the job.blade.php view
    return view('job', [
        'job' => $job
    ]);
});