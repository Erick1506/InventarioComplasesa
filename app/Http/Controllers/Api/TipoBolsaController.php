<?php

// app/Http/Controllers/Api/TipoBolsaController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TipoBolsa;
use Illuminate\Http\Request;

class TipoBolsaController extends Controller
{
    public function index() { return response()->json(TipoBolsa::all()); }
    public function store(Request $request)
    {
        $validated = $request->validate(['nombre_tipo' => 'required|string|max:100']);
        return response()->json(TipoBolsa::create($validated), 201);
    }
    public function show(TipoBolsa $tipoBolsa) { return response()->json($tipoBolsa); }
    public function update(Request $request, TipoBolsa $tipoBolsa)
    {
        $validated = $request->validate(['nombre_tipo' => 'string|max:100']);
        $tipoBolsa->update($validated);
        return response()->json($tipoBolsa);
    }
    public function destroy(TipoBolsa $tipoBolsa)
    {
        $tipoBolsa->delete();
        return response()->json(null, 204);
    }
}