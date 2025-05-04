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
    Schema::create('cart_departements', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('departement_id');
        $table->string('title');
        $table->string('subtitle');
        $table->string('icon')->nullable();
        $table->text('description')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();

        $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_departements');
    }
};
