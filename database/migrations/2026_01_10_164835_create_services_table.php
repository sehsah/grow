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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->json('title'); // Multilingual: {en: "Title", ar: "العنوان"}
            $table->string('slug')->unique();
            $table->json('short_description')->nullable(); // Multilingual
            $table->json('description')->nullable(); // Multilingual
            $table->json('category')->nullable(); // Multilingual: {en: "Category", ar: "الفئة"}
            $table->text('icon')->nullable(); // SVG icon HTML (not translatable)
            $table->string('image')->nullable(); // Image path (not translatable)
            $table->integer('order')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->json('meta_title')->nullable(); // Multilingual
            $table->json('meta_description')->nullable(); // Multilingual
            $table->timestamps();
        });


        //make service items table
        Schema::create('service_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services');
            $table->string('icon')->nullable();
            $table->json('title');
            $table->json('description')->nullable();
            $table->json('items')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
