<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data mobil beserta brand & fitur many-to-many nya
        $cars = Car::with(['brand', 'features'])->latest()->get();
        return view('welcome', compact('cars'));
    }
}
