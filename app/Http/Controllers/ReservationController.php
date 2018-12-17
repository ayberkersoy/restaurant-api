<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return response()->json(Reservation::all());
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'reservation_date' => 'required',
            'reservation_hour' => 'required',
            'people_count' => 'required',
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $reservation = Reservation::create($request->all());

        return response()->json($reservation);
    }

    public function show(Reservation $reservation)
    {
        return response()->json($reservation);
    }

    public function update(Request $request, Reservation $reservation)
    {
        $validation = Validator::make($request->all(), [
            'reservation_date' => 'required',
            'reservation_hour' => 'required',
            'people_count' => 'required',
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $reservation->update($request->all());

        return response()->json($reservation);
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return response()->json(['status' => true]);
    }
}
