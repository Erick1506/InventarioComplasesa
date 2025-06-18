<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    ProduccionBolsaController,
    MovimientoStockController,
    MovimientoAreaController,
    TipoBolsaController,
    ColorController,
    TamanoController,
    MateriaPrimaController,
    MezclaController,
    DetalleMezclaController,
    RolloController,
    ProductoBolsaController,
    AreaController 
};

// Rutas protegidas por middleware auth si deseas:
// Route::middleware('auth:sanctum')->group(function () {

Route::apiResources([
    'areas'             => AreaController::class,
    'producciones'      => ProduccionBolsaController::class,
    'movimientos-stock' => MovimientoStockController::class,
    'movimientos-area'  => MovimientoAreaController::class,
    'tipos-bolsa'       => TipoBolsaController::class,
    'colores'           => ColorController::class,
    'tamanos'           => TamanoController::class,
    'materias-prima'    => MateriaPrimaController::class,
    'mezclas'           => MezclaController::class,
    'detalle-mezclas'   => DetalleMezclaController::class,
    'rollos'            => RolloController::class,
    'productos-bolsa'   => ProductoBolsaController::class,
]);

// });
