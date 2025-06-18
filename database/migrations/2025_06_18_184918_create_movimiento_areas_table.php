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
    Schema::create('movimiento_areas', function (Blueprint $table) {
        $table->id();
        $table->dateTime('fecha');
        $table->foreignId('id_area_origen')->constrained('areas');
        $table->foreignId('id_area_destino')->constrained('areas');
        $table->text('descripcion')->nullable();
        $table->enum('tipo_elemento', ['Materia_Prima', 'Mezcla', 'Rollo', 'Bolsa']);
        $table->unsignedBigInteger('id_elemento'); # Puede ser ID de mezcla, producto, etc.
        $table->double('cantidad');
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimiento_areas');
    }
};
