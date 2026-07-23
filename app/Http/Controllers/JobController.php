<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {
        // Load jobs with their employer, newest first, and paginate 3 per page
        $jobs = Job::with('employer')->latest()->paginate(3);

        // Show resources/views/jobs/index.blade.php
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    // Show create job form
    public function create()
    {
        // Show resources/views/jobs/create.blade.php
        return view('jobs.create');
    }

    // Store a new job
    public function store()
    {
        // Validate the form data before saving
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        // Create a new job
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),

            // For now, attach new jobs to employer ID 1
            'employer_id' => 1,
        ]);

        // Redirect back to the jobs list
        return redirect('/jobs');
    }

    // Show one job
    public function show(Job $job)
    {
        // Laravel automatically finds the job from /jobs/{job}
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    // Show edit form
    public function edit(Job $job)
    {
        // Laravel automatically finds the job from /jobs/{job}/edit
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    // Update a job
    public function update(Job $job)
    {
        // Validate the form data before updating
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        // Update the job
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        // Redirect back to the single job page
        return redirect('/jobs/' . $job->id);
    }

    // Delete a job
    public function destroy(Job $job)
    {
        // Laravel automatically finds the job, then deletes it
        $job->delete();

        // Redirect back to the jobs list
        return redirect('/jobs');
    }
}