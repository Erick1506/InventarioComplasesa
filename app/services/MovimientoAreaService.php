<?php

namespace App\Services;

use App\Models\MovimientoArea;

class MovimientoAreaService
{
    public function getAll() { return MovimientoArea::all(); }

    public function create(array $data) { return MovimientoArea::create($data); }

    public function getById(MovimientoArea $movimientoArea) { return $movimientoArea; }

    public function update(MovimientoArea $movimientoArea, array $data)
    {
        $movimientoArea->update($data);
        return $movimientoArea;
    }

    public function delete(MovimientoArea $movimientoArea)
    {
        $movimientoArea->delete();
        return true;
    }
}
