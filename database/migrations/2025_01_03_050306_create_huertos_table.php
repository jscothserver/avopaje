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
        Schema::create('huertos', function (Blueprint $table) {
            $table->id();
            $table->string('huerto',100);
            $table->string('hue',50);
            $table->string('productor',100);
            $table->string('localidad',50);
            $table->string('municipio',50);
            $table->string('estado',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huertos');
    }
};
