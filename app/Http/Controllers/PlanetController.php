<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    public function index()
    {
        $data = ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];

        $planets = [
            [
                'name' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
            ],
            [
                'name' => 'Earth',
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that\'s inhabited by living things.'
            ],
            [
                'name' => 'Jupiter',
                'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
            ],
        ];

    
        $dbPlanets = DB::table('planets')->get();

        return view('planets', [
            'data' => $data,
            'planets' => $planets,
            'dbPlanets' => $dbPlanets, 
        ]);
    }

    public function show(string $planet)
    {
        $planets = [
            'mars' => [
                'name' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
            ],
            'venus' => [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
            ],
            'earth' => [
                'name' => 'Earth',
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that\'s inhabited by living things.'
            ],
            'jupiter' => [
                'name' => 'Jupiter',
                'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
            ],
        ];

        $key = strtolower($planet);

   
        $dbPlanet = DB::table('planets')
            ->whereRaw('LOWER(name) = ?', [strtolower($planet)])
            ->first();

        return view('show', [
            'planet' => $planets[$key] ?? null,
            'dbPlanet' => $dbPlanet, 
        ]);
    }
}
