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
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onUpdate('cascade');
            $table->foreignId('referente_id')->nullable()->constrained()->onUpdate('cascade');
            $table->foreignId('acopio_id')->nullable()->constrained()->onUpdate('cascade');
            $table->foreignId('huerto_id')->nullable()->constrained()->onUpdate('cascade');
            $table->string('guia',50)->nullable();
            $table->date('fecha_corte')->nullable();
            $table->decimal('peso_externo', 10, 2)->nullable();
            $table->decimal('peso_interno', 10, 2)->nullable();
            $table->integer('total_tarimas')->nullable();
            $table->foreignId('proceso_id')->constrained()->onUpdate('cascade');
            $table->foreignId('truck_id')->nullable()->constrained()->onUpdate('cascade');
            $table->string('comentarios')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lots');
    }
};
