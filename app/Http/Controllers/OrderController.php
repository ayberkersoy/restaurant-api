<?php

namespace App\Http\Controllers;

use Validator;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return response()->json(Order::all());
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'user_contact_id' => 'required|exists:user_contacts,id',
            'status' => 'required',
            'price' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $order = Order::create($request->all());

        return response()->json($order);
    }

    public function show(Order $order)
    {
        return response()->json($order);
    }

    public function update(Request $request, Order $order)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'user_contact_id' => 'required|exists:user_contacts,id',
            'status' => 'required',
            'price' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $order->update($request->all());

        return response()->json($order);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(['status' => true]);
    }
}
