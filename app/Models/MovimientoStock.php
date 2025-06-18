<?php

// app/Models/MovimientoStock.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovimientoStock extends Model
{
    protected $fillable = ['fecha', 'tipo_movimiento', 'origen', 'materia_prima_id', 'cantidad'];

    public function materiaPrima()
    {
        return $this->belongsTo(MateriaPrima::class);
    }
} 