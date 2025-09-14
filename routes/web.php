<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
    return view('planets', ['data' => $data]);
});
