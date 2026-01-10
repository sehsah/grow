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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->json('title'); // Multilingual: {en: "Title", ar: "العنوان"}
            $table->json('excerpt')->nullable(); // Multilingual
            $table->json('content')->nullable(); // Multilingual: Full blog content
            $table->string('image'); // Image path (not translatable)
            $table->string('slug')->unique();
            $table->json('author')->nullable(); // Multilingual
            $table->timestamp('published_at')->nullable();
            $table->integer('read_time')->default(5); // in minutes
            $table->integer('order')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->json('meta_title')->nullable(); // Multilingual
            $table->json('meta_description')->nullable(); // Multilingual
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
