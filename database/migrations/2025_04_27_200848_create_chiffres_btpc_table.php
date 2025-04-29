<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // ... existing code ...
public function up(): void
{
    Schema::create('chiffres_btpc', function (Blueprint $table) {
        $table->id();
        $table->string('icon')->nullable();
        $table->string('value')->nullable();
        $table->string('label')->nullable();
        $table->timestamps();
    });
}
// ... existing code ...

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chiffres_btpc');
    }
};
