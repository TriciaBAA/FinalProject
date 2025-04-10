<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Photographer;
use App\Models\Museum;

class BookingController extends Controller
{
    // Show the booking form
    public function index()
    {
        $photographers = Photographer::all(); 

        return view('booking', compact('photographers'));
    }

    // Store the booking data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'photographer_id' => 'required|integer',
            'date' => 'required|date',
            'number_of_people' => 'required|integer',
            'special_requests' => 'nullable|string',
        ]);

        Booking::create([
            'user_id' => auth()->id(),
            'photographer_id' => $validated['photographer_id'],
            'date' => $validated['date'],
            'number_of_people' => $validated['number_of_people'],
            'special_requests' => $validated['special_requests'],
        ]);

        return redirect()->route('profile')->with('success', 'Booking created successfully!');
    }
}
