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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->json('name'); // Multilingual: {en: "Name", ar: "الاسم"}
            $table->json('position'); // Multilingual: {en: "Position", ar: "المنصب"}
            $table->string('image'); // Image path (not translatable)
            $table->json('bio')->nullable(); // Multilingual
            $table->string('email')->nullable(); // Email (not translatable)
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
