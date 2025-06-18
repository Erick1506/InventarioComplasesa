<?php
namespace App\Services;

use App\Models\ProductoBolsa;

class ProductoBolsaService
{
    public function getAll() { return ProductoBolsa::all(); }

    public function create(array $data) { return ProductoBolsa::create($data); }

    public function getById(ProductoBolsa $item) { return $item; }

    public function update(ProductoBolsa $item, array $data)
    {
        $item->update($data);
        return $item;
    }

    public function delete(ProductoBolsa $item)
    {
        $item->delete();
        return true;
    }
}
