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
       Schema::create('job_listings', function (Blueprint $table) {
    // Create an automatic ID column
    $table->id();

    // Store the job title, for example: Director
    $table->string('title');

    // Store the salary, for example: $50,000
    $table->string('salary');

    // Create created_at and updated_at columns
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
