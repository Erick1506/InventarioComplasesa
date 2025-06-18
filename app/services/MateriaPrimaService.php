<?php
namespace App\Services;

use App\Models\MateriaPrima;

class MateriaPrimaService
{
    public function getAll() { return MateriaPrima::all(); }

    public function create(array $data) { return MateriaPrima::create($data); }

    public function getById(MateriaPrima $item) { return $item; }

    public function update(MateriaPrima $item, array $data)
    {
        $item->update($data);
        return $item;
    }

    public function delete(MateriaPrima $item)
    {
        $item->delete();
        return true;
    }
}
