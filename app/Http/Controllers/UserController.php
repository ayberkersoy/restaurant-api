<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\User;
use App\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $successStatus = 200;

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
            'password' => 'required|min:6|max:255|confirmed'
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

    public function favourites(User $user)
    {
        $favourites = [];
        foreach ($user->favourites as $favourite) {
            $product = Product::findOrFail($favourite->product_id);
            array_push($favourites, $product);
        }
        return response()->json($favourites);
    }

    public function contacts(User $user)
    {
        return response()->json($user->contacts);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:255|confirmed'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('AppName')->accessToken;
        return response()->json(['success' => $success], $this->successStatus);
    }

    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('AppName')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function getUser()
    {
        $user = Auth::user();
        return response()->json($user);
    }
}
