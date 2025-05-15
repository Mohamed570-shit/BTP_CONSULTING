<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
public function up()
{
    Schema::create('offre_emplois', function (Blueprint $table) {
        $table->id();
        $table->string('titre'); // <-- add this line if missing
        $table->string('slug')->nullable();
        $table->text('description')->nullable();
        $table->string('location')->nullable();
        $table->string('type')->nullable();
        $table->date('date_expiration')->nullable();
        // ... other columns ...
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('offre_emplois');
    }
};