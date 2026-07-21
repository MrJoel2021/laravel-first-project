<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    // Allows this model to use JobFactory
    use HasFactory;

    // Tell Laravel this model uses the job_listings table
    protected $table = 'job_listings';

    // Allow these fields to be inserted
    protected $fillable = ['title', 'salary'];

    // A job belongs to one employer
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    // A job can have many tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'job_tag', 'job_listing_id', 'tag_id');
    }
}