<?php
namespace App\Services;

use App\Models\Mezcla;

class MezclaService
{
    public function getAll() { return Mezcla::with('detalles')->get(); }

    public function create(array $data) { return Mezcla::create($data); }

    public function getById(Mezcla $item) { return $item->load('detalles'); }

    public function update(Mezcla $item, array $data)
    {
        $item->update($data);
        return $item;
    }

    public function delete(Mezcla $item)
    {
        $item->delete();
        return true;
    }
}
