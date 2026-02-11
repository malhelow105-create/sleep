<?php

namespace Database\Seeders;

use App\Models\Sounds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sounds::create([
            'name' => 'Rain',
            'file_path' => 'sounds/rain.mp3',
            'image_path' => 'images/rain.jpg',
            'duration' => 3600
        ],
        [
            'name' => 'Ocean Waves',
            'file_path' => 'sounds/ocean_waves.mp3',
            'image_path' => 'images/ocean_waves.jpg',
            'duration' => 3600
        ],
        [
            'name' => 'Forest',
            'file_path' => 'sounds/forest.mp3',
            'image_path' => 'images/forest.jpg',
            'duration' => 3600
        ]);
    }
}
