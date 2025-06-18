<?php

// app/Http/Controllers/Api/MovimientoAreaController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MovimientoArea;
use Illuminate\Http\Request;

class MovimientoAreaController extends Controller
{
    public function index() { return response()->json(MovimientoArea::all()); }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha' => 'required|date',
            'id_area_origen' => 'required|exists:areas,id',
            'id_area_destino' => 'required|exists:areas,id',
            'descripcion' => 'nullable|string',
            'tipo_elemento' => 'required|string',
            'id_elemento' => 'required|integer',
            'cantidad' => 'required|numeric']);
        return response()->json(MovimientoArea::create($validated), 201);
    }
    public function show(MovimientoArea $movimientoArea) { return response()->json($movimientoArea); }
    public function update(Request $request, MovimientoArea $movimientoArea)
    {
        $validated = $request->validate([
            'fecha' => 'date',
            'id_area_origen' => 'exists:areas,id',
            'id_area_destino' => 'exists:areas,id',
            'descripcion' => 'nullable|string',
            'tipo_elemento' => 'string',
            'id_elemento' => 'integer',
            'cantidad' => 'numeric']);
        $movimientoArea->update($validated);
        return response()->json($movimientoArea);
    }
    public function destroy(MovimientoArea $movimientoArea)
    {
        $movimientoArea->delete();
        return response()->json(null, 204);
    }
}
