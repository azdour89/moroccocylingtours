<?php

namespace App\Http\Controllers;

use App\Models\Tour;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['tours' => Tour::orderBy('sort')->take(3)->get()]);
    }
}
