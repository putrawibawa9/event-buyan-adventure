<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::insert([
            [
                'name' => 'Festival Danau Buyan',
                'date' => '2025-09-10',
                'location' => 'Danau Buyan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Camping Adventure',
                'date' => '2025-10-05',
                'location' => 'Hutan Buyan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fun Bike Buyan',
                'date' => '2025-11-15',
                'location' => 'Area Buyan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
