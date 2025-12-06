<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;

class PlanetSeeder extends Seeder
{
    public function run(): void
    {
        Planet::create(['name' => 'Mars',    'description' => 'The red planet']);
        Planet::create(['name' => 'Venus',   'description' => 'Hottest planet']);
        Planet::create(['name' => 'Earth',   'description' => 'Our home']);
        Planet::create(['name' => 'Jupiter', 'description' => 'Largest planet']);
        Planet::create(['name' => 'Saturn',  'description' => 'Has rings']);
        Planet::create(['name' => 'Neptune', 'description' => 'Windy blue planet']);
        Planet::create(['name' => 'Uranus',  'description' => 'Tilted on its side']);
    }
}