<?php
namespace App\Services;

use App\Models\Rollo;

class RolloService
{
    public function getAll() { return Rollo::all(); }

    public function create(array $data) { return Rollo::create($data); }

    public function getById(Rollo $item) { return $item; }

    public function update(Rollo $item, array $data)
    {
        $item->update($data);
        return $item;
    }

    public function delete(Rollo $item)
    {
        $item->delete();
        return true;
    }
}
