<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('offre_emplois', function (Blueprint $table) {
            $table->string('location')->nullable()->after('description');
            $table->enum('type', ['CDI', 'CDD', 'Stage', 'Freelance'])->nullable()->after('location');
        });
    }

    public function down()
    {
        Schema::table('offre_emplois', function (Blueprint $table) {
            $table->dropColumn(['location', 'type']);
        });
    }
};