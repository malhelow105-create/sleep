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
        $sounds = [
        [
            'name' => 'Rain',
            'file_path' => 'sounds/nature/rain.mp3',
            'image_path' => 'images/nature/rain.png',
            'category' => 'Nature',
            'duration' => 3600
        ],
        [
            'name' => 'Relax Podcast',
            'file_path' => 'sounds/podcasts/relax_podcast.mp3',
            'image_path' => 'images/podcasts/relax_podcast.jpg',
            'category' => 'Podcasts',
            'duration' => 2400
        ],
        [
            'name' => 'Forest Story',
            'file_path' => 'sounds/stories/forest_story.mp3',
            'image_path' => 'images/stories/forest_story.jpg',
            'category' => 'Stories',
            'duration' => 1800
        ],
        [
            'name' => 'Ocean Waves',
            'file_path' => 'sounds/nature/ocean_waves.mp3',
            'image_path' => 'images/nature/ocean_waves.jpg',
            'category' => 'Nature',
            'duration' => 3600
        ],
        [
            'name' => 'Sleep Meditation',
            'file_path' => 'sounds/stories/sleep_meditation.mp3',
            'image_path' => 'images/stories/sleep_meditation.jpg',
            'category' => 'Stories',
            'duration' => 2700
        ],
         [
            'name' => 'Night Rain',
            'file_path' => 'sounds/nature/night_rain.mp3',
            'image_path' => 'images/nature/night_rain.jpg',
            'category' => 'Nature',
            'duration' => 3600
        ],
         [
            'name' => 'Guided Sleep',
            'file_path' => 'sounds/stories/guided_sleep.mp3',
            'image_path' => 'images/stories/guided_sleep.jpg',
            'category' => 'Stories',
            'duration' => 3000
        ],
         [
            'name' => 'Calm Story',
            'file_path' => 'sounds/stories/calm_story.mp3',
            'image_path' => 'images/stories/calm_story.jpg',
            'category' => 'Stories',
            'duration' => 2100
         ],
         [
            'name' => 'Thunderstorm',
            'file_path' => 'sounds/nature/thunderstorm.mp3',
            'image_path' => 'images/nature/thunderstorm.jpg',
            'category' => 'Nature',
            'duration' => 3600
         ],
         [
            'name' => 'Sleepy Podcast',
            'file_path' => 'sounds/podcasts/sleepy_podcast.mp3',
            'image_path' => 'images/podcasts/sleepy_podcast.jpg',
            'category' => 'Podcasts',
            'duration' => 2400
         ],
    ];

    foreach ($sounds as $sound) {
        Sounds::create($sound);
    }
}
}
