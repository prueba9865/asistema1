<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/productos", [ProductoController::class, "index"]);

Route::post("/productos", [ProductoController::class, "store"]);

Route::get("/productos/create", [ProductoController::class, "create"]);

Route::get("/clientes", [ClienteController::class, "index"]);

Route::get("/cliente/{id}", [ClienteController::class, "show"]);

Route::get("/productos/{id?}", [ProductoController::class, "show"]);

Route::delete("/productos/{id}", [ProductoController::class, "destroy"]);

Route::get("/productos/edit/{id}", [ProductoController::class, "edit"]);

Route::put("/productos/edit/{id}", [ProductoController::class, "update"]);

/*Route::get('/productos/{id}', function ($id) {
    return view('catalogo', ['id' => $id]);
});*/

Route::get('/saludo', function () {
    return view('saludo', ['probando' => 'Probando']);
});

Route::get('/clientes/{id}/ventas/{idVenta?}', function ($id, $idVenta= null) {
    if($idVenta == null){
        return "Error";
    }
    return "Cliente: $id, y venta: $idVenta";
});