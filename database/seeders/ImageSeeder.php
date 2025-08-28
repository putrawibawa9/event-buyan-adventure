<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        $events = Event::all();
        foreach ($events as $event) {
            Image::create([
                'event_id' => $event->id,
                'path' => 'event_images/sample1.jpg',
            ]);
            Image::create([
                'event_id' => $event->id,
                'path' => 'event_images/sample2.jpg',
            ]);
        }
    }
}
