<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('service_items', function (Blueprint $table) {
            if (!Schema::hasColumn('service_items', 'subtitle')) {
                $table->json('subtitle')->nullable()->after('title');
            }

            // Ensure cascading deletes for related items
            $table->dropForeign(['service_id']);
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('service_items', function (Blueprint $table) {
            if (Schema::hasColumn('service_items', 'subtitle')) {
                $table->dropColumn('subtitle');
            }

            // Restore default foreign key without cascade
            $table->dropForeign(['service_id']);
            $table->foreign('service_id')
                ->references('id')
                ->on('services');
        });
    }
};
