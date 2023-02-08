<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//consultas

Route::get('/cargaareas', [ApiController::class, 'cargaareas']);
Route::get('/cargaempleados', [ApiController::class, 'cargaempleados']);
Route::get('/buscaeid/{id}', [ApiController::class, 'buscaeid']);

Route::delete('/eliminae/{id}', [ApiController::class, 'eliminae']);

Route::post('/altae', [ApiController::class, 'altae']);

// Route::put('/modificae', [ApiController::class, '']);
Route::put('/modificae', [ApiController::class, 'modificae']);


