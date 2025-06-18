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
    Schema::create('movimiento_stocks', function (Blueprint $table) {
        $table->id();
        $table->date('fecha');
        $table->enum('tipo_movimiento', ['Entrada', 'Salida']);
        $table->string('origen')->nullable();
        $table->foreignId('materia_prima_id')->constrained('materia_primas');
        $table->double('cantidad');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimiento_stocks');
    }
};
