<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Support\Str;

class PlanetController extends Controller
{

    public function index()
    {
        $planets = Planet::all(); // Eloquent all records

        return view('planets', compact('planets'));
    }

    public function show(string $name)
    {
        $planet = Planet::where('name', 'like', $name)->firstOrFail();

        return view('show', compact('planet'));
    }
}
