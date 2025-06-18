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
        Schema::create('detalle_mezclas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mezcla_id')->constrained('mezclas')->onDelete('cascade');
            $table->foreignId('materia_prima_id')->constrained('materia_primas')->onDelete('cascade');
            $table->double('cantidad_requerida');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_mezclas');
    }
};
