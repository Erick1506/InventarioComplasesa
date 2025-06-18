<?php

namespace App\Services;

use App\Models\ProduccionBolsa;

class ProduccionBolsaService
{
    public function getAll() { return ProduccionBolsa::all(); }

    public function create(array $data) { return ProduccionBolsa::create($data); }

    public function getById(ProduccionBolsa $produccionBolsa) { return $produccionBolsa; }

    public function update(ProduccionBolsa $produccionBolsa, array $data)
    {
        $produccionBolsa->update($data);
        return $produccionBolsa;
    }

    public function delete(ProduccionBolsa $produccionBolsa)
    {
        $produccionBolsa->delete();
        return true;
    }
}
