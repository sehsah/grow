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
        Schema::create('working_processes', function (Blueprint $table) {
            $table->id();
            $table->string('step_number', 10)->unique(); // Step 01, Step 02, etc.
            $table->json('title'); // Multilingual title
            $table->json('description'); // Multilingual description
            $table->text('icon')->nullable(); // SVG icon code
            $table->integer('order')->default(0); // Order for display
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('working_processes');
    }
};
