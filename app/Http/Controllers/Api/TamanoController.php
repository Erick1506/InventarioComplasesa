<?php

// app/Http/Controllers/Api/TamanoController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tamano;
use Illuminate\Http\Request;

class TamanoController extends Controller
{
    public function index() { return response()->json(Tamano::all()); }
    public function store(Request $request)
    {
        $validated = $request->validate(['dimensiones' => 'required|string|max:100']);
        return response()->json(Tamano::create($validated), 201);
    }
    public function show(Tamano $tamano) { return response()->json($tamano); }
    public function update(Request $request, Tamano $tamano)
    {
        $validated = $request->validate(['dimensiones' => 'string|max:100']);
        $tamano->update($validated);
        return response()->json($tamano);
    }
    public function destroy(Tamano $tamano)
    {
        $tamano->delete();
        return response()->json(null, 204);
    }
}