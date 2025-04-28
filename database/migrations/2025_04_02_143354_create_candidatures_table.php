<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturesTable extends Migration
{

   public function up()
   {
       Schema::create('candidatures', function (Blueprint $table) {
           $table->id();
           $table->string('nom')->nullable();
           $table->string('email')->nullable();
           $table->string('telephone')->nullable();
           $table->string('post')->nullable();
           $table->string('cv')->nullable();
           $table->text('lettre_motivation')->nullable();
           $table->string('slug')->nullable(); // <-- Add this line
           $table->foreignId('offre_id')->nullable()->constrained('offre_emplois')->onDelete('cascade');
           $table->timestamps();
       });
   }
    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
}
