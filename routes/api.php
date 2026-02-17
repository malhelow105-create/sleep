<?php

use App\Http\Controllers\SoundsController;
use App\Models\Sounds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sounds', [SoundsController::class, 'index']);
Route::get('/sounds/{category}', [SoundsController::class, 'byCategory']);

Route::get('/images', [SoundsController::class, 'images']);
// i stopped here because of the images is not working on render anymore
