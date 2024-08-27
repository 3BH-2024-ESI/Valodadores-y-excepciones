<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/videojuego", [VideojuegoController::class, "List"]);
Route::get("/videojuego/{id}", [VideojuegoController::class, "Show"]);
Route::post("/videojuego", [VideojuegoController::class, "Create"]);
Route::put("/videojuego/{id}", [VideojuegoController::class, "Update"]);
Route::delete("/videojuego/{id}", [VideojuegoController::class, "Delete"]);
