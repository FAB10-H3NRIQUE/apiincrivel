<?php

use App\Http\Controllers\SportController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\CompetitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
    
Route::get('/minhas-informacoes', function () {
    return response()->json([
        'nome' => 'FABIO HENRIQUE PEREIRA VIANA',
        'RM' => '2661'
    ]);

});

Route::apiResource('/sports', SportController::class);
Route::apiResource('/trainers', TrainerController::class);
Route::apiResource('/localitys', LocalityController::class);
Route::apiResource('/competitors', CompetitorController::class);