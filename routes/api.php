<?php

use App\Http\Controllers\DemandeController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PersonnelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post("/entreprise/store", [EntrepriseController::class, "store"]);
Route::post("/personnel/store", [PersonnelController::class, "store"]);
Route::post("/demande/store", [DemandeController::class, "store"]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
