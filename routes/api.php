<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\respuestaController;
use App\Http\Controllers\PaisController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**
 * 
 * 
 * @OA\Get(
  *      path="/api/ejecutar",
   *     summary="Endpoint para la consulta de datos",
    *    @OA\Response(response="200", description="Datos devueltos"),
    *)
 * 
 */


Route::get("/ejecutar", [respuestaController::class, "index"]);

/**
 * 
 * 
 * @OA\Post(
  *      path="/api/nuevo",
   *     summary="Endpoint para insertar datos",
    *    @OA\Response(response="200", description="Datos devueltos"),
    *)
 * 
 */

Route::post("/nuevo",[PaisController::class,"crearPais"]);

/**
 * 
 * 
 * @OA\Get(
  *      path="/api/obtener",
   *     summary="Endpoint para la consulta de datos",
    *    @OA\Response(response="200", description="Datos devueltos"),
    *)
 * 
 */

Route::get("/obtener",[PaisController::class,"obtenerPais"]);

Route::delete("/eliminar/{id}", [PaisController::class, "eliminarPais"]);

Route::put("/modificar/{id}", [PaisController::class, "modificarPais"]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
