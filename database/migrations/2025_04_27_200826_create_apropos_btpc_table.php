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
    Schema::create('apropos_btpc', function (Blueprint $table) {
        $table->id();
        $table->string('subtitle')->nullable();
        $table->text('description')->nullable();
        $table->text('domaines')->nullable();
        $table->text('approche')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apropos_btpc');
    }
};
