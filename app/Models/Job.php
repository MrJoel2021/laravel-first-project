<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Tell Laravel this model uses the job_listings table
    protected $table = 'job_listings';

    // Allow these fields to be inserted using Job::create()
    protected $fillable = ['title', 'salary'];
}