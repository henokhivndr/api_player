<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\PositionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('players', \App\Http\Controllers\Api\PlayerController::class);
Route::apiResource('position', \App\Http\Controllers\Api\PositionController::class);