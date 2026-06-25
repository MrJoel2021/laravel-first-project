<?php

namespace App\Models;

class Job
{
    // Return all jobs as an array
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ];
    }

    // Find one job by its id
    public static function find(int $id): array
    {
        // Look through all jobs and return the first one where the id matches
        return \Illuminate\Support\Arr::first(
            static::all(),
            fn($job) => $job['id'] == $id
        );
    }
}