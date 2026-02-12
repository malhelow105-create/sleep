<?php

use App\Http\Controllers\SoundsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sounds', [SoundsController::class, 'index']);
Route::get('/sounds/{category}', [SoundsController::class, 'byCategory']);
