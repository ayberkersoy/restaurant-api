<?php

namespace App\Http\Controllers;

use Mail;
use Validator;
use App\User;
use App\Reservation;
use Illuminate\Http\Request;

/**
 * @group Reservation Management
 *
 * APIs for managing reservations
 */
class ReservationController extends Controller
{
    public function indexView()
    {
        return view('admin.reservations.index');
    }

    public function editView($id)
    {
        return view('admin.reservations.edit', compact('id'));
    }
    /**
     * Index all reservations
     * @response {
     *      "id": 1,
     *      "reservation_date": "2019-01-05",
     *      "reservation_hour": "17:00:00",
     *      "people_count": 4,
     *      "name": "Ahmet",
     *      "surname": "Mehmet",
     *      "phone": "5304783400",
     *      "note": "Manzaralı masa olursa güzel olur.",
     *      "user_id": 1
     * }
     */
    public function index()
    {
        return response()->json(Reservation::all());
    }

    public function lastReservations()
    {
        return response()->json(Reservation::orderBy('id', 'desc')->take(10)->get());
    }

    /**
     * Create a new reservation
     *
     * @bodyParam reservation_date date required The date of the reservation.
     * @bodyParam reservation_hour time required The time of the reservation.
     * @bodyParam people_count int required The people count of the reservation.
     * @bodyParam name string required The name of the person.
     * @bodyParam surname string required The surname of the person.
     * @bodyParam phone string required The phone of the person.
     * @bodyParam note string optional The note of the reservation.
     * @bodyParam user_id integer optional The id of the user.
     *
     * @response {
     *      "id": 1,
     *      "reservation_date": "2019-01-05",
     *      "reservation_hour": "17:00:00",
     *      "people_count": 4,
     *      "name": "Ahmet",
     *      "surname": "Mehmet",
     *      "phone": "5304783400",
     *      "note": "Manzaralı masa olursa güzel olur.",
     *      "user_id": 1
     * }
     */
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

        if($request->user_id == 0) {
            return response()->json(['status' => true]);
        } else {
            $user = User::where('id', $request->user_id)->first();
        }

        $userData = [
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email
        ];

        Mail::send('emails.reservation_created', [], function($message) use ($userData) {
            $message->to($userData['email'], $userData['name'] . ' ' . $userData['surname'])->subject
            ('Rezervasyon oluşturuldu');
            $message->from('info@maycreator.com', env('APP_NAME'));
        });

        if (Mail::failures()) {
            return response()->json(['status' => false], 401);
        }

        return response()->json($reservation, 200);
    }

    /**
     * Show specific reservation
     *
     * @queryParam id required The id of the reservation.
     *
     * @response {
     *      "id": 1,
     *      "reservation_date": "2019-01-05",
     *      "reservation_hour": "17:00:00",
     *      "people_count": 4,
     *      "name": "Ahmet",
     *      "surname": "Mehmet",
     *      "phone": "5304783400",
     *      "note": "Manzaralı masa olursa güzel olur.",
     *      "user_id": 1
     * }
     */
    public function show(Reservation $reservation)
    {
        return response()->json($reservation);
    }

    /**
     * Update specific reservation
     *
     * @queryParam id required The id of the reservation.
     * @bodyParam id int required The id of the reservation. Example: 9
     * @bodyParam reservation_date date required The date of the reservation.
     * @bodyParam reservation_hour time required The time of the reservation.
     * @bodyParam people_count int required The people count of the reservation.
     * @bodyParam name string required The name of the person.
     * @bodyParam surname string required The surname of the person.
     * @bodyParam phone string required The phone of the person.
     * @bodyParam note string optional The note of the reservation.
     * @bodyParam user_id integer optional The id of the user.
     *
     * @response {
     *      "id": 9,
     *      "reservation_date": "2019-01-05",
     *      "reservation_hour": "17:00:00",
     *      "people_count": 4,
     *      "name": "Ahmet",
     *      "surname": "Mehmet",
     *      "phone": "5304783400",
     *      "note": "Manzaralı masa olursa güzel olur.",
     *      "user_id": 1
     * }
     */
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

    public function reservationUpdated(Request $request, Reservation $reservation)
    {
        $reservation->status = $request->status;
        $reservation->save();

        $data = [];
        if($request->status == 1) {
            $data['status'] = 'Onaylandı.';
        } elseif ($request->status == 0) {
            $data['status'] = 'İptal Edildi.';
        } elseif ($request->status == 2) {
            $data['status'] = 'Bekliyor.';
        }

        if($reservation->user_id == 0) {
            return response()->json(['status' => true]);
        } else {
            $user = User::where('id', $reservation->user_id)->first();
        }

        $userData = [
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email
        ];

        Mail::send('emails.reservation_updated', $data, function($message) use ($userData) {
            $message->to($userData['email'], $userData['name'] . ' ' . $userData['surname'])->subject
            ('Rezervasyon durumu');
            $message->from('info@maycreator.com', env('APP_NAME'));
        });

        if (Mail::failures()) {
            return response()->json(['status' => false], 401);
        }

        return response()->json(['status' => true]);
    }

    /**
     * Delete specific reservation
     *
     * @queryParam id required The id of the reservation.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return response()->json(['status' => true]);
    }
}
