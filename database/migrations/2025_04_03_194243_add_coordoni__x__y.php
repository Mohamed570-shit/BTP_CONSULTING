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
        Schema::table('projets', function (Blueprint $table) {
            $table->decimal('coordonnee_x', 10, 7)->nullable();
            $table->decimal('coordonnee_y', 10, 7)->nullable();
            $table->string('icone_domaine')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projets', function (Blueprint $table) {
            $table->dropColumn(['coordonnee_x', 'coordonnee_y', 'icone_domaine']);
        });
    }
};