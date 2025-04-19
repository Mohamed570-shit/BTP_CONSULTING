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
    Schema::create('projets', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->string('slug')->unique();
        $table->text('description');
        $table->string('image')->nullable();
        $table->enum('status', ['en cours', 'terminé']);

        $table->integer('num_marche_interne')->nullable();
        $table->string('num_marche_externe')->nullable();
        $table->string('maitre_ouvrage')->nullable();
        $table->text('objet_marche')->nullable();
        $table->date('date_osc')->nullable();
        $table->integer('delai_execution')->nullable();
        $table->string('lieu_execution')->nullable();
        $table->string('type_marche')->nullable();
        $table->string('domaine')->nullable();
        $table->decimal('coordonnee_x', 10, 7)->nullable(); // Ajout des coordonnées X (latitude)
        $table->decimal('coordonnee_y', 10, 7)->nullable(); // Ajout des coordonnées Y (longitude)
        $table->timestamps();
       


    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};