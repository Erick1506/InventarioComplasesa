<?php
namespace App\Services;

use App\Models\MovimientoStock;

class MovimientoStockService
{
    public function getAll() { return MovimientoStock::all(); }

    public function create(array $data) { return MovimientoStock::create($data); }

    public function getById(MovimientoStock $movimientoStock) { return $movimientoStock; }

    public function update(MovimientoStock $movimientoStock, array $data)
    {
        $movimientoStock->update($data);
        return $movimientoStock;
    }

    public function delete(MovimientoStock $movimientoStock)
    {
        $movimientoStock->delete();
        return true;
    }
}
