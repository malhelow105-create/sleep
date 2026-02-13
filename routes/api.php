<?php

use App\Http\Controllers\SoundsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sounds', [SoundsController::class, 'index']);
Route::get('/sounds/{category}', [SoundsController::class, 'byCategory']);

Route::get('/images', function () {
    $files = File::files(public_path('images/nature'));

    $urls = [];

    foreach ($files as $file) {
        $urls[] = asset('images/nature/' . $file->getFilename());
    }

    return response()->json($urls);
});
