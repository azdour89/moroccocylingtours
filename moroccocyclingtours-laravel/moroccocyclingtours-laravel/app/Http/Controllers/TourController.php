<?php

namespace App\Http\Controllers;

use App\Models\Tour;

class TourController extends Controller
{
    public function index()
    {
        return view('tours.index', ['tours' => Tour::orderBy('sort')->get()]);
    }

    public function show(Tour $tour)
    {
        return view('tours.show', compact('tour'));
    }
}
