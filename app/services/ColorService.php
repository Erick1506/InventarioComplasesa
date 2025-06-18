<?php
namespace App\Services;

use App\Models\Color;

class ColorService
{
    public function getAll() { return Color::all(); }

    public function create(array $data) { return Color::create($data); }

    public function getById(Color $color) { return $color; }

    public function update(Color $color, array $data)
    {
        $color->update($data);
        return $color;
    }

    public function delete(Color $color)
    {
        $color->delete();
        return true;
    }
}
