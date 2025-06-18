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
        Schema::create('producto_bolsas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->foreignId('tipo_bolsa_id')->constrained('tipo_bolsas');
            $table->foreignId('color_id')->constrained('color');
            $table->foreignId('tamano_id')->constrained('tamanos');
            $table->integer('stock_actual')->default(0);
            $table->integer('stock_minimo')->default(0);
            $table->integer('stock_maximo')->default(0);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_bolsas');
    }
};
