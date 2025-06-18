<?php

// app/Models/MovimientoArea.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovimientoArea extends Model
{
    protected $fillable = ['fecha', 'id_area_origen', 'id_area_destino', 'descripcion', 'tipo_elemento', 'id_elemento', 'cantidad'];

    public function areaOrigen()
    {
        return $this->belongsTo(Area::class, 'id_area_origen');
    }

    public function areaDestino()
    {
        return $this->belongsTo(Area::class, 'id_area_destino');
    }
}
