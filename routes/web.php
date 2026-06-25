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
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

// Single job page route
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id)
    ]);
});