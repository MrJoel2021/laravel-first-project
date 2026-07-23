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
    // Load jobs with their employer, newest first, and show 3 jobs per page
    $jobs = Job::with('employer')->latest()->paginate(3);

    // Send the jobs to resources/views/jobs/index.blade.php
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Show the create job form
// This must stay ABOVE /jobs/{id}
Route::get('/jobs/create', function () {
    // Show resources/views/jobs/create.blade.php
    return view('jobs.create');
});

// Store a new job in the database
Route::post('/jobs', function () {
    // Validate the form data before saving it
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // Create a new job from the form data
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),

        // For now, we attach every new job to employer ID 1
        'employer_id' => 1,
    ]);

    // After saving, go back to the jobs list
    return redirect('/jobs');
});

// Show the edit job form
// This must stay ABOVE /jobs/{id}
Route::get('/jobs/{id}/edit', function ($id) {
    // Find the job or show 404
    $job = Job::findOrFail($id);

    // Show resources/views/jobs/edit.blade.php
    return view('jobs.edit', [
        'job' => $job
    ]);
});

// Update an existing job
Route::patch('/jobs/{id}', function ($id) {
    // Validate the form data before updating
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // Find the job or show 404
    $job = Job::findOrFail($id);

    // Update the job with the form data
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // Go back to the single job page
    return redirect('/jobs/' . $job->id);
});

// Delete an existing job
Route::delete('/jobs/{id}', function ($id) {
    // Find the job or show 404
    $job = Job::findOrFail($id);

    // Delete the job from the database
    $job->delete();

    // Go back to the jobs list
    return redirect('/jobs');
});

// Single job page route
Route::get('/jobs/{id}', function ($id) {
    // Find the job in the database
    // If it does not exist, Laravel shows 404
    $job = Job::findOrFail($id);

    // Send the selected job to resources/views/jobs/show.blade.php
    return view('jobs.show', [
        'job' => $job
    ]);
});