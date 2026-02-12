<?php

namespace App\Http\Controllers;

use App\Models\Sounds;
use Illuminate\Http\Request;

class SoundsController extends Controller
{
    public function index()
    {
        $sounds = Sounds::all()->map(function ($sound) {
            return [
                'id' => $sound->id,
                'name' => $sound->name,
                'file_url' => url('storage/' . $sound->file_path),
                'image_url' => $sound->image_path
                    ? url('storage/' . $sound->image_path)
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
                'duration' => $sound->duration,
            ];
        }));
    }
}
