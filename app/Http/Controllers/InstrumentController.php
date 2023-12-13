<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Instrument;
use Illuminate\Support\Facades\Hash;
use Faker\Provider\UserAgent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class InstrumentController extends Controller
{
    //Calling Instrument Out
    public function showReservationDetails($instrumentId)
{
    $instrument = Instrument::findOrFail($instrumentId);

    return view('reservation', ['instrument' => $instrument]);
}
}
