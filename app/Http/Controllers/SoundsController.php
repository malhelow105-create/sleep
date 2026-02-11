<?php

namespace App\Http\Controllers;

use App\Models\Sounds;
use Illuminate\Http\Request;

class SoundsController extends Controller
{
    public function index()
    {
        $sounds = Sounds::all()->map(function ($sound){
            return[
                'id' => $sound->id,
                'name'=> $sound->name,
                'file_path' => $sound->file_path,
                'image_path' => $sound->image_path,
                'duration' => $sound->duration,
            ];
        });
        return response()->json($sounds);
    }
}
