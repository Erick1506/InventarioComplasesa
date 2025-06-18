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
        Schema::create('rollos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_produccion');
            $table->foreignId('mezcla_id')->constrained('mezclas');
            $table->double('peso_kg');
            $table->double('largo_metros')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rollos');
    }
};
