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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->json('title'); // Multilingual: {en: "Title", ar: "العنوان"}
            $table->json('description'); // Multilingual
            $table->json('full_description')->nullable(); // Multilingual
            $table->json('category')->nullable(); // Multilingual: {en: "Category", ar: "الفئة"}
            $table->string('image'); // Image path (not translatable)
            $table->json('gallery')->nullable(); // Array of images (not translatable)
            $table->json('client_name')->nullable(); // Multilingual
            $table->date('project_date')->nullable();
            $table->string('project_url')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
