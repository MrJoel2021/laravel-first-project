<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();

            // Link to the job_listings table
            $table->foreignIdFor(\App\Models\Job::class, 'job_listing_id')
                ->constrained()
                ->cascadeOnDelete();

            // Link to the tags table
            $table->foreignIdFor(\App\Models\Tag::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_tag');
    }
};