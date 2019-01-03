<?php

namespace App\Http\Controllers;

use Validator;
use App\Order;
use Illuminate\Http\Request;

/**
 * @group Order Management
 *
 * APIs for managing orders
 */
class OrderController extends Controller
{
    /**
     * Index all orders
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "user_contact_id": 1,
     *      "status": "1",
     *      "price": "15.00",
     *      "note": "Lütfen çatal bıçak koymayın."
     *      "date_ordered": "2018-12-17 10:06:40"
     * }
     */
    public function index()
    {
        return response()->json(Order::all());
    }

    /**
     * Create a new order
     *
     * @bodyParam user_id int required The id of the user.
     * @bodyParam user_contact_id int required The contact id of the user.
     * @bodyParam status int required The status of the order.
     * @bodyParam price decimal required The price of the order.
     * @bodyParam note string required The note of the message.
     * @bodyParam date_ordered timestamp required The date_ordered of the message.
     *
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "user_contact_id": 1,
     *      "status": "1",
     *      "price": "15.00",
     *      "note": "Lütfen çatal bıçak koymayın."
     *      "date_ordered": "2018-12-17 10:06:40"
     * }
     */
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

    /**
     * Show specific order
     *
     * @queryParam id required The id of the order.
     *
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "user_contact_id": 1,
     *      "status": "1",
     *      "price": "15.00",
     *      "note": "Lütfen çatal bıçak koymayın."
     *      "date_ordered": "2018-12-17 10:06:40"
     * }
     */
    public function show(Order $order)
    {
        return response()->json($order);
    }

    /**
     * Update specific order
     *
     * @queryParam id required The id of the order.
     * @bodyParam id int required The id of the order. Example: 9
     * @bodyParam user_id int required The id of the user.
     * @bodyParam user_contact_id int required The contact id of the user.
     * @bodyParam status int required The status of the order.
     * @bodyParam price decimal required The price of the order.
     * @bodyParam note string required The note of the message.
     * @bodyParam date_ordered timestamp required The date_ordered of the message.
     *
     * @response {
     *      "id": 9,
     *      "user_id": 1,
     *      "user_contact_id": 1,
     *      "status": "1",
     *      "price": "15.00",
     *      "note": "Lütfen çatal bıçak koymayın."
     *      "date_ordered": "2018-12-17 10:06:40"
     * }
     */
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

    /**
     * Delete specific order
     *
     * @queryParam id required The id of the order.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(['status' => true]);
    }
}
