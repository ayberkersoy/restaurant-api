<?php

namespace App\Http\Controllers;

use Validator;
use App\UserContact;
use Illuminate\Http\Request;

class UserContactController extends Controller
{
    public function index()
    {
        return response()->json(UserContact::all());
    }

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

    public function show(UserContact $userContact)
    {
        return response()->json($userContact);
    }

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

    public function destroy(UserContact $userContact)
    {
        $userContact->delete();
        return response()->json(['status' => true]);
    }
}
