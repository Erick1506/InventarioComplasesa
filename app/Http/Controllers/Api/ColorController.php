<?php


// app/Http/Controllers/Api/ColorController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index() { return response()->json(Color::all()); }
    public function store(Request $request)
    {
        $validated = $request->validate(['nombre_color' => 'required|string|max:100']);
        return response()->json(Color::create($validated), 201);
    }
    public function show(Color $color) { return response()->json($color); }
    public function update(Request $request, Color $color)
    {
        $validated = $request->validate(['nombre_color' => 'string|max:100']);
        $color->update($validated);
        return response()->json($color);
    }
    public function destroy(Color $color)
    {
        $color->delete();
        return response()->json(null, 204);
    }
}
