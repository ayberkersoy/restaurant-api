<?php

namespace App\Http\Controllers;

use Validator;
use App\Favourite;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function index()
    {
        return response()->json(Favourite::all());
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $favourite = Favourite::create($request->all());

        return response()->json($favourite);
    }

    public function show(Favourite $favourite)
    {
        return response()->json($favourite);
    }

    public function update(Request $request, Favourite $favourite)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $favourite->update($request->all());

        return response()->json($favourite);
    }

    public function destroy(Favourite $favourite)
    {
        $favourite->delete();
        return response()->json(['status' => true]);
    }
}
