<?php

// app/Models/ProductoBolsa.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoBolsa extends Model
{
    protected $fillable = ['nombre_producto', 'tipo_bolsa_id', 'color_id', 'tamano_id', 'stock_actual', 'stock_minimo', 'stock_maximo'];

    public function tipoBolsa()
    {
        return $this->belongsTo(TipoBolsa::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function tamano()
    {
        return $this->belongsTo(Tamano::class);
    }
}
