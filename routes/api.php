<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\KorbanBanjirController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/korbanBanjir', [KorbanBanjirController::class, 'index']);
    Route::post('/korbanBanjir', [KorbanBanjirController::class, 'store']);
    Route::put('/korbanBanjir/{korbanBanjir}', [KorbanBanjirController::class, 'update']);
    Route::delete('/korbanBanjir/{korbanBanjir}', [KorbanBanjirController::class, 'destroy']);
});
