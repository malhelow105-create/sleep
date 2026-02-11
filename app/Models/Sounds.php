<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sounds extends Model
{
    protected $fillable = [
        'name',
        'file_path',
        'image_path',
        'duration'
    ];
}
