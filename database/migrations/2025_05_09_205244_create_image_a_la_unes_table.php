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
        Schema::create('image_a_la_unes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('a_la_une_id')->constrained('a_la_unes')->onDelete('cascade');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 1. Drop la contrainte FK explicitement
        Schema::table('image_a_la_unes', function (Blueprint $table) {
            $table->dropForeign(['a_la_une_id']);
        });

        // 2. Puis drop la table
        Schema::dropIfExists('image_a_la_unes');
    }
};
