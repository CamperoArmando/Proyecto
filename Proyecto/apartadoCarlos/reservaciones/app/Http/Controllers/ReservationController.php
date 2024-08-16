<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            'guest_number' => 'required|integer',
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservations.index')
                         ->with('success', 'Reservación realizada con éxito.');
    }
}

