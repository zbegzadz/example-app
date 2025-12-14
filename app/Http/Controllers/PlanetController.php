<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Support\Str;

class PlanetController extends Controller
{

    public function index()
{
    $planets = Planet::with('solarSystem')->get();

    return view('planets', compact('planets'));
}


public function show(string $name)
{
    $planet = Planet::with('solarSystem')
        ->where('name', $name)
        ->firstOrFail();

    return view('show', compact('planet'));
}

}
