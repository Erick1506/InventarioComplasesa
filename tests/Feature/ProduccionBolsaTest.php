<?php
namespace Tests\Feature;

use App\Models\ProduccionBolsa;
use App\Models\ProductoBolsa;
use App\Models\Area;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProduccionBolsaTest extends TestCase
{
    use RefreshDatabase;

    public function test_lista_producciones()
    {
        ProduccionBolsa::factory()->count(3)->create();
        $response = $this->getJson('/api/producciones');
        $response->assertStatus(200)->assertJsonCount(3);
    }

    public function test_crea_produccion()
    {
        $producto = ProductoBolsa::factory()->create();
        $area = Area::factory()->create();

        $data = [
            'fecha' => now()->toDateString(),
            'producto_bolsa_id' => $producto->id,
            'cantidad_producida' => 150,
            'area_produccion' => $area->id,
            'observaciones' => 'Turno noche',
        ];

        $response = $this->postJson('/api/producciones', $data);
        $response->assertStatus(201)->assertJsonFragment(['cantidad_producida' => 150]);
    }

    public function test_actualiza_produccion()
    {
        $produccion = ProduccionBolsa::factory()->create(['cantidad_producida' => 100]);
        $response = $this->putJson("/api/producciones/{$produccion->id}", ['cantidad_producida' => 200]);
        $response->assertStatus(200)->assertJsonFragment(['cantidad_producida' => 200]);
    }

    public function test_elimina_produccion()
    {
        $produccion = ProduccionBolsa::factory()->create();
        $response = $this->deleteJson("/api/producciones/{$produccion->id}");
        $response->assertStatus(204);
        $this->assertDatabaseMissing('produccion_bolsas', ['id' => $produccion->id]);
    }
}
