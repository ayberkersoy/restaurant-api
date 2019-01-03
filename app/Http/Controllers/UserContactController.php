<?php

namespace App\Http\Controllers;

use Validator;
use App\UserContact;
use Illuminate\Http\Request;

/**
 * @group User Contact Management
 *
 * APIs for managing user contacts
 */
class UserContactController extends Controller
{
    /**
     * Index all user contacts
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "name": "Ahmet Mehmet",
     *      "phone": "5304783400",
     *      "address": "Yenisehir mah. osmanli blv."
     * }
     */
    public function index()
    {
        return response()->json(UserContact::all());
    }

    /**
     * Create a new user contact
     *
     * @bodyParam user_id int required The id of the user.
     * @bodyParam name string required The name of the user contact.
     * @bodyParam phone string required The phone of the user contact.
     * @bodyParam address string required The phone of the user contact.
     *
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "name": "Ahmet Mehmet",
     *      "phone": "5304783400",
     *      "address": "Yenisehir mah. osmanli blv."
     * }
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $contact = UserContact::create($request->all());

        return response()->json($contact);
    }

    /**
     * Show specific user contact
     *
     * @queryParam id required The id of the user contact.
     *
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "name": "Ahmet Mehmet",
     *      "phone": "5304783400",
     *      "address": "Yenisehir mah. osmanli blv."
     * }
     */
    public function show(UserContact $userContact)
    {
        return response()->json($userContact);
    }

    /**
     * Update specific user contact
     *
     * @queryParam id required The id of the user contact.
     * @bodyParam id int required The id of the user contact. Example: 9
     * @bodyParam user_id int required The id of the user.
     * @bodyParam name string required The name of the user contact.
     * @bodyParam phone string required The phone of the user contact.
     * @bodyParam address string required The phone of the user contact.
     *
     * @response {
     *      "id": 9,
     *      "user_id": 1,
     *      "name": "Ahmet Mehmet",
     *      "phone": "5304783400",
     *      "address": "Yenisehir mah. osmanli blv."
     * }
     */
    public function update(Request $request, UserContact $userContact)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $userContact->update($request->all());

        return response()->json($userContact);
    }

    /**
     * Delete specific user contact
     *
     * @queryParam id required The id of the user contact.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(UserContact $userContact)
    {
        $userContact->delete();
        return response()->json(['status' => true]);
    }
}
