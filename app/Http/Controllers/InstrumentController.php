<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Instrument;
use App\Models\Reservation;
use Illuminate\Support\Facades\Hash;
use Faker\Provider\UserAgent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class InstrumentController extends Controller
{
    //Calling Instrument Out
    public function showReservationDetails()
{
    $instruments = Instrument::all();
    $user = Auth::user();
    $totalPrice = $instruments->sum('rental_price'); // Calculate total price as needed

    return view('user.reservation', compact('instruments', 'totalPrice'), ['user' => $user]);
}

public function rentNow($instrumentId)
{
    $instrument = Instrument::find($instrumentId);
    $user = Auth::user();

    if (!$instrument) {
        // Handle instrument not found
    }

    // Create a reservation record
    $reservation = new Reservation();
    $reservation->user_id = auth()->id();
    $reservation->instrument_id = $instrument->id;
    $reservation->reserved_at = now(); // You might want to customize this based on your requirements
    $reservation->save();

    // Retrieve user reservations
    $userReservations = auth()->user()->reservations;

    // Redirect to reservation history with user reservations
    return redirect()->route('reservationDetails')->with(['success' => 'Instrument reserved successfully!', 'userReservations' => $userReservations]);
}

public function showReservationHistory()
{
    $userReservations = auth()->user()->reservations;

    return view('user.history', compact('userReservations'));
}
}
