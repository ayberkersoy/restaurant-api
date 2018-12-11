<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:255'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $user = User::create(
            array_merge(
                array_except($request->all(), ['password']),
                ['password' => bcrypt($request->password)]
            )
        );

        return response()->json($user);
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function update(Request $request, User $user)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'sometimes|required|min:6|max:255'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        if ($request->has('password')) {
            $user->update(
                array_merge(
                    array_except($request->all(), ['password']),
                    ['password' => bcrypt($request->password)]
                )
            );
        } else {
            $user->update($request->all());
        }

        return response()->json($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['status' => true]);
    }
}
