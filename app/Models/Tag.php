<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    // Allows this model to use TagFactory
    use HasFactory;

    // Allow name to be inserted
    protected $fillable = ['name'];

    // A tag can belong to many jobs
    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_tag', 'tag_id', 'job_listing_id');
    }
}