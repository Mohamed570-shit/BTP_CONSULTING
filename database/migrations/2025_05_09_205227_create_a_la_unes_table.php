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
        Schema::create('a_la_unes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('presentation');
            $table->string('image')->nullable(); // Image principale
            $table->date('date');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_la_unes');
    }
};