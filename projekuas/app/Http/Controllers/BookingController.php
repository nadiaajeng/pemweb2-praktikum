<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $armadas = Post::with('brand')->get();
        return view('booking', compact('armadas'));
    }
}