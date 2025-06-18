<?php
namespace App\Services;

use App\Models\DetalleMezcla;

class DetalleMezclaService
{
    public function getAll() { return DetalleMezcla::all(); }

    public function create(array $data) { return DetalleMezcla::create($data); }

    public function getById(DetalleMezcla $item) { return $item; }

    public function update(DetalleMezcla $item, array $data)
    {
        $item->update($data);
        return $item;
    }

    public function delete(DetalleMezcla $item)
    {
        $item->delete();
        return true;
    }
}
