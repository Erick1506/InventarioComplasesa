<?php

// app/Http/Controllers/Api/MovimientoStockController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MovimientoStock;
use Illuminate\Http\Request;

class MovimientoStockController extends Controller
{
    public function index() { return response()->json(MovimientoStock::all()); }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha' => 'required|date',
            'tipo_movimiento' => 'required|string',
            'origen' => 'nullable|string',
            'materia_prima_id' => 'required|exists:materia_primas,id',
            'cantidad' => 'required|numeric']);
        return response()->json(MovimientoStock::create($validated), 201);
    }
    public function show(MovimientoStock $movimientoStock) { return response()->json($movimientoStock); }
    public function update(Request $request, MovimientoStock $movimientoStock)
    {
        $validated = $request->validate([
            'fecha' => 'date',
            'tipo_movimiento' => 'string',
            'origen' => 'nullable|string',
            'materia_prima_id' => 'exists:materia_primas,id',
            'cantidad' => 'numeric']);
        $movimientoStock->update($validated);
        return response()->json($movimientoStock);
    }
    public function destroy(MovimientoStock $movimientoStock)
    {
        $movimientoStock->delete();
        return response()->json(null, 204);
    }
}