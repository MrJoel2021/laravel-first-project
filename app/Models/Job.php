<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Tell Laravel this model uses the job_listings table
    protected $table = 'job_listings';
}