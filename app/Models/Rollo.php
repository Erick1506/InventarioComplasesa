<?php

// app/Models/Rollo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rollo extends Model
{
    protected $fillable = ['fecha_produccion', 'mezcla_id', 'peso_kg', 'largo_metros', 'observaciones'];

    public function mezcla()
    {
        return $this->belongsTo(Mezcla::class);
    }
}