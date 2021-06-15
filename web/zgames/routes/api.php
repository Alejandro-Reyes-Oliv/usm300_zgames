<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Quiero usar el controlador asi que lo importo, se importa con namespace/NombreClase
use App\Http\Controllers\ConsolasController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//La ruta puede ser post o get (Post para enviar cosas a la bd y get para obtener)
Route::get("marcas/get", [ConsolasController::class, "getMarcas"]);
//Route::get("endpoint", [Controlador::class, "Metodo"]);