<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetalleMezcla;
use Illuminate\Http\Request;

class DetalleMezclaController extends Controller
{
    public function index() { return response()->json(DetalleMezcla::all()); }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'mezcla_id' => 'required|exists:mezclas,id',
            'materia_prima_id' => 'required|exists:materia_primas,id',
            'cantidad_requerida' => 'required|numeric'
        ]);
        return response()->json(DetalleMezcla::create($validated), 201);
    }
    public function show(DetalleMezcla $detalleMezcla) { return response()->json($detalleMezcla); }
    public function update(Request $request, DetalleMezcla $detalleMezcla)
    {
        $validated = $request->validate([
            'mezcla_id' => 'exists:mezclas,id',
            'materia_prima_id' => 'exists:materia_primas,id',
            'cantidad_requerida' => 'numeric'
        ]);
        $detalleMezcla->update($validated);
        return response()->json($detalleMezcla);
    }
    public function destroy(DetalleMezcla $detalleMezcla)
    {
        $detalleMezcla->delete();
        return response()->json(null, 204);
    }
}
