<?php
// app/Models/Color.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'color';
    protected $fillable = ['nombre_color'];
}