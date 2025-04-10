<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Fetch bookings associated with the authenticated user
        $bookings = Booking::where('user_id', auth()->id())->get();

        return view('profile', compact('bookings'));
    }
}
