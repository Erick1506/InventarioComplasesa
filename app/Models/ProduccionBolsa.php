<?php

// app/Models/ProduccionBolsa.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProduccionBolsa extends Model
{
    protected $fillable = ['fecha', 'producto_bolsa_id', 'cantidad_producida', 'area_produccion', 'observaciones'];

    public function productoBolsa()
    {
        return $this->belongsTo(ProductoBolsa::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_produccion');
    }
}
