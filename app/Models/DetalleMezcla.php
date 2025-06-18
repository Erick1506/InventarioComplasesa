<?php

// app/Models/DetalleMezcla.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleMezcla extends Model
{
    protected $fillable = ['mezcla_id', 'materia_prima_id', 'cantidad_requerida'];

    public function mezcla()
    {
        return $this->belongsTo(Mezcla::class);
    }

    public function materiaPrima()
    {
        return $this->belongsTo(MateriaPrima::class);
    }
}