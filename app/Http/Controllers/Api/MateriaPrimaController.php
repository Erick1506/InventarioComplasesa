<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MateriaPrima;
use Illuminate\Http\Request;

class MateriaPrimaController extends Controller
{
    public function index() { return response()->json(MateriaPrima::all()); }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'unidad' => 'required|string|max:50',
            'stock_actual' => 'numeric',
            'stock_minimo' => 'numeric',
            'stock_maximo' => 'numeric'
        ]);
        return response()->json(MateriaPrima::create($validated), 201);
    }
    public function show(MateriaPrima $materiaPrima) { return response()->json($materiaPrima); }
    public function update(Request $request, MateriaPrima $materiaPrima)
    {
        $validated = $request->validate([
            'nombre' => 'string|max:100',
            'unidad' => 'string|max:50',
            'stock_actual' => 'numeric',
            'stock_minimo' => 'numeric',
            'stock_maximo' => 'numeric'
        ]);
        $materiaPrima->update($validated);
        return response()->json($materiaPrima);
    }
    public function destroy(MateriaPrima $materiaPrima)
    {
        $materiaPrima->delete();
        return response()->json(null, 204);
    }
}
