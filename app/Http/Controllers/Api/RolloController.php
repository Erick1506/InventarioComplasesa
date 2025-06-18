<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rollo;
use Illuminate\Http\Request;

class RolloController extends Controller
{
    public function index() { return response()->json(Rollo::all()); }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha_produccion' => 'required|date',
            'mezcla_id' => 'required|exists:mezclas,id',
            'peso_kg' => 'required|numeric',
            'largo_metros' => 'required|numeric',
            'observaciones' => 'nullable|string'
        ]);
        return response()->json(Rollo::create($validated), 201);
    }
    public function show(Rollo $rollo) { return response()->json($rollo); }
    public function update(Request $request, Rollo $rollo)
    {
        $validated = $request->validate([
            'fecha_produccion' => 'date',
            'mezcla_id' => 'exists:mezclas,id',
            'peso_kg' => 'numeric',
            'largo_metros' => 'numeric',
            'observaciones' => 'nullable|string'
        ]);
        $rollo->update($validated);
        return response()->json($rollo);
    }
    public function destroy(Rollo $rollo)
    {
        $rollo->delete();
        return response()->json(null, 204);
    }
}
