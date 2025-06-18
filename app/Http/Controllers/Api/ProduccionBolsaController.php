<?php

// app/Http/Controllers/Api/ProduccionBolsaController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProduccionBolsa;
use Illuminate\Http\Request;

class ProduccionBolsaController extends Controller
{
    public function index() { return response()->json(ProduccionBolsa::all()); }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha' => 'required|date',
            'producto_bolsa_id' => 'required|exists:producto_bolsas,id',
            'cantidad_producida' => 'required|numeric',
            'area_produccion' => 'required|exists:areas,id',
            'observaciones' => 'nullable|string']);
        return response()->json(ProduccionBolsa::create($validated), 201);
    }
    public function show(ProduccionBolsa $produccionBolsa) { return response()->json($produccionBolsa); }
    public function update(Request $request, ProduccionBolsa $produccionBolsa)
    {
        $validated = $request->validate([
            'fecha' => 'date',
            'producto_bolsa_id' => 'exists:producto_bolsas,id',
            'cantidad_producida' => 'numeric',
            'area_produccion' => 'exists:areas,id',
            'observaciones' => 'nullable|string']);
        $produccionBolsa->update($validated);
        return response()->json($produccionBolsa);
    }
    public function destroy(ProduccionBolsa $produccionBolsa)
    {
        $produccionBolsa->delete();
        return response()->json(null, 204);
    }
}