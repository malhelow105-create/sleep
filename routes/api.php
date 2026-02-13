<?php

use App\Http\Controllers\SoundsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sounds', function () {
    $files = File::files(public_path('sounds')); // Folder with your audio files
    $urls = [];
    $id = 1;

    foreach ($files as $file) {
        // Optional: You can define an image for each sound in a parallel folder
        $imagePath = public_path('sounds_images/' . pathinfo($file->getFilename(), PATHINFO_FILENAME) . '.jpg');

        $urls[] = [
            'id' => $id++,
            'name' => pathinfo($file->getFilename(), PATHINFO_FILENAME),
            'file_url' => asset('sounds/' . $file->getFilename()),
            'image_url' => File::exists($imagePath) ? asset('sounds_images/' . pathinfo($file->getFilename(), PATHINFO_FILENAME) . '.jpg') : null,
            'duration' => null, // optional: calculate if you want using a PHP audio library
        ];
    }

    return response()->json($urls);
});
Route::get('/sounds/{category}', [SoundsController::class, 'byCategory']);

Route::get('/images', function () {
    $files = File::files(public_path('images/nature'));

    $urls = [];

    foreach ($files as $file) {
        $urls[] = asset('images/nature/' . $file->getFilename());
    }

    return response()->json($urls);
});

Route::get('/test-db', function () {
    return \App\Models\Sounds::count();
});

Route::get('/api/check-sounds', function () {
    return \App\Models\Sounds::all();
});

