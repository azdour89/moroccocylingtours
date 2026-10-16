<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Tour;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function create(Request $request)
    {
        return view('contact', [
            'tours' => Tour::orderBy('sort')->get(),
            'selected' => $request->query('tour'),
        ]);
    }

    public function store(Request $request)
    {
        // Hidden "website" field is a honeypot: real visitors leave it empty.
        if ($request->filled('website')) {
            return redirect()->route('contact');
        }

        $data = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:160',
            'tour_id' => 'nullable|exists:tours,id',
            'group_size' => 'required|integer|min:1|max:40',
            'preferred_month' => 'nullable|string|max:40',
            'message' => 'nullable|string|max:3000',
        ]);

        Inquiry::create($data);
        // To get an email too: Mail::to('you@moroccocyclingtours.com')->send(new NewInquiry($inquiry));

        return redirect()->route('contact')->with('sent', 'Thanks. We will reply within 24 hours.');
    }
}
