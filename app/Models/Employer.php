<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    // Allows this model to use EmployerFactory
    use HasFactory;

    // Allow name to be inserted
    protected $fillable = ['name'];

    // One employer can have many jobs
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}