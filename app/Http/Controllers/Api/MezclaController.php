<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mezcla;
use Illuminate\Http\Request;

class MezclaController extends Controller
{
    public function index() { return response()->json(Mezcla::with('detalles')->get()); }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_mezcla' => 'required|string|max:100',
            'descripcion' => 'nullable|string'
        ]);
        return response()->json(Mezcla::create($validated), 201);
    }
    public function show(Mezcla $mezcla) { return response()->json($mezcla->load('detalles')); }
    public function update(Request $request, Mezcla $mezcla)
    {
        $validated = $request->validate([
            'nombre_mezcla' => 'string|max:100',
            'descripcion' => 'nullable|string'
        ]);
        $mezcla->update($validated);
        return response()->json($mezcla);
    }
    public function destroy(Mezcla $mezcla)
    {
        $mezcla->delete();
        return response()->json(null, 204);
    }
}
