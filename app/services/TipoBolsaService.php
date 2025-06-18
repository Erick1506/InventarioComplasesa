<?php
namespace App\Services;

use App\Models\TipoBolsa;

class TipoBolsaService
{
    public function getAll() { return TipoBolsa::all(); }

    public function create(array $data) { return TipoBolsa::create($data); }

    public function getById(TipoBolsa $tipoBolsa) { return $tipoBolsa; }

    public function update(TipoBolsa $tipoBolsa, array $data)
    {
        $tipoBolsa->update($data);
        return $tipoBolsa;
    }

    public function delete(TipoBolsa $tipoBolsa)
    {
        $tipoBolsa->delete();
        return true;
    }
}
