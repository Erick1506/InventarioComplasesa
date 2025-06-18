<?php
namespace App\Services;

use App\Models\Tamano;

class TamanoService
{
    public function getAll() { return Tamano::all(); }

    public function create(array $data) { return Tamano::create($data); }

    public function getById(Tamano $tamano) { return $tamano; }

    public function update(Tamano $tamano, array $data)
    {
        $tamano->update($data);
        return $tamano;
    }

    public function delete(Tamano $tamano)
    {
        $tamano->delete();
        return true;
    }
}
