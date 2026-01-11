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
        Schema::create('target_fields', function (Blueprint $table) {
            $table->id();
            $table->json('name'); // Multilingual name
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
        Schema::dropIfExists('target_fields');
    }
};
