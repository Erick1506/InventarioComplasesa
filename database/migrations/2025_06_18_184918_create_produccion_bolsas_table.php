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
        Schema::create('produccion_bolsas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->foreignId('producto_bolsa_id')->constrained('producto_bolsas');
            $table->integer('cantidad_producida');
            $table->foreignId('area_produccion')->constrained('areas');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produccion_bolsas');
    }
};
