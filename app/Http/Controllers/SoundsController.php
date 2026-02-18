<?php

namespace App\Http\Controllers;

use App\Models\Sounds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SoundsController extends Controller
{
    public function index()
    {
        $sounds = Sounds::all()->map(function ($sound) {
            return [
                'id' => $sound->id,
                'name' => $sound->name,
                'file_url' => url($sound->file_path),
                'image_url' => $sound->image_path
                    ? url($sound->image_path)
                    : null,
                'duration' => $sound->duration,
            ];
        });
        return response()->json($sounds);
    }



    public function byCategory($category)
    {
        $sounds = Sounds::where('category', $category)->get();

        return response()->json($sounds->map(function ($sound) {
            return [
                'id' => $sound->id,
                'name' => $sound->name,
                'file_url' => url($sound->file_path),
                'image_url' => $sound->image_path
                    ? url($sound->image_path)
                    : null,
                'duration' => $sound->duration,
            ];
        }));
    }
    public function images () {
     $files = File::files(public_path('images/'));

     $urls = [];

     foreach ($files as $file) {
         $urls[] = asset('images/' . $file->getFilename());
     }

     return response()->json([ 'images' => $urls]);
    }
}

