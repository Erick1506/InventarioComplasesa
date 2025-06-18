<?php

// app/Models/MateriaPrima.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    protected $fillable = ['nombre', 'unidad', 'stock_actual', 'stock_minimo', 'stock_maximo'];
}