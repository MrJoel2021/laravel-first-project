<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(3);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    // Show create job form
    public function create()
    {
        return view('jobs.create');
    }

    // Store a new job
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }

    // Show one job
    public function show($id)
    {
        $job = Job::findOrFail($id);

        return view('jobs.show', [
            'job' => $job
        ]);
    }

    // Show edit form
    public function edit($id)
    {
        $job = Job::findOrFail($id);

        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    // Update a job
    public function update($id)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = Job::findOrFail($id);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/jobs/' . $job->id);
    }

    // Delete a job
    public function destroy($id)
    {
        $job = Job::findOrFail($id);

        $job->delete();

        return redirect('/jobs');
    }
}