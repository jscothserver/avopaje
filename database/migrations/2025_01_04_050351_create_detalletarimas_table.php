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
        Schema::create('detalletarimas', function (Blueprint $table) {
            $table->id();
            $table->integer('numorden')->default(1);
            $table->integer('numcajas');
            $table->foreignId('box_id')->constrained()->onUpdate('cascade');
            $table->decimal('peso',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalletarimas');
    }
};
