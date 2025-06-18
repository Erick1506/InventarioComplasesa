<?php

// app/Models/Mezcla.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mezcla extends Model
{
    protected $fillable = ['nombre_mezcla', 'descripcion'];

    public function detalles()
    {
        return $this->hasMany(DetalleMezcla::class);
    }
}