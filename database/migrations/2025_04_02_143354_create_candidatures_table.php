<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('candidatures', function (Blueprint $table) {
        $table->id();
        $table->foreignId('offre_id')->constrained('offre_emplois');
        $table->string('nom');
        $table->string('email');
        $table->string('cv');
        $table->enum('status', ['en attente', 'accepté', 'refusé']);
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
