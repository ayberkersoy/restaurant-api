<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Mail;
use Validator;
use App\Order;
use App\Product;
use App\Basket;
use Illuminate\Http\Request;

/**
 * @group Order Management
 *
 * APIs for managing orders
 */
class OrderController extends Controller
{
    public function indexView()
    {
        return view('admin.orders.index');
    }

    public function editView($id)
    {
        return view('admin.orders.edit', compact('id'));
    }

    /**
     * Index all orders
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "user_contact_id": 1,
     *      "status": "1",
     *      "price": "15.00",
     *      "note": "Lütfen çatal bıçak koymayın."
     *      "date_ordered": "2018-12-17 10:06:40",
     *      "currency": "TL",
     *      "payment_type_id": "1"
     * }
     */
    public function index()
    {
        return response()->json(Order::with(['user', 'userContact'])->get());
    }

    public function lastOrders()
    {
        return response()->json(Order::with(['user', 'userContact'])->orderBy('id', 'desc')->take(10)->get());
    }

    /**
     * Create a new order
     *
     * @bodyParam user_id int required The id of the user.
     * @bodyParam user_contact_id int required The contact id of the user.
     * @bodyParam status int required The status of the order.
     * @bodyParam price decimal required The price of the order.
     * @bodyParam note string required The note of the order.
     * @bodyParam date_ordered timestamp required The date_ordered of the order.
     * @bodyParam currency string required The currency of the order.
     * @bodyParam payment_type_id int required The payment type of the order.
     * @bodyParam products json required The product's ids.
     * @bodyParam piece int required The product's piece.
     *
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "user_contact_id": 1,
     *      "status": "1",
     *      "price": "15.00",
     *      "note": "Lütfen çatal bıçak koymayın.",
     *      "date_ordered": "2018-12-17 10:06:40",
     *      "currency": "TL",
     *      "payment_type_id": 1,
     *      "products": [{
     *          "id": 1,
     *          "piece": 2
     *      },
     *      {
     *          "id": 2,
     *          "piece": 1
     *      }]
     * }
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'user_contact_id' => 'required|exists:user_contacts,id',
            'status' => 'required',
            'price' => 'required',
            'currency' => 'required',
            'payment_type_id' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $order = Order::create($request->except('products'));
        foreach ($request->products as $item) {
            $product = Product::findOrFail($item['id']);
            $basket = Basket::create([
                'product_id' => $product->id,
                'order_id' => $order->id,
                'product_name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'piece' => $item['piece']
            ]);
        }



        Mail::send('emails.order_created', $request->toArray(), function($message) {
            $user = User::where('id', request('user_id'))->first();
            $message->to($user->email, $user->name . ' ' . $user->surname)->subject
            ('Siparişiniz oluşturuldu');
            $message->from('info@maycreator.com', env('APP_NAME'));
        });

        if (Mail::failures()) {
            return response()->json(['status' => false], 401);
        }

        return response()->json($order, 200);
    }

    /**
     * Show specific order
     *
     * @queryParam id required The id of the order.
     *
     * @response
     *[
     *   {
     *   "id": 1,
     *   "user_id": 1,
     *   "user_contact_id": 1,
     *   "status": 1,
     *   "price": "50.00",
     *   "created_at": "2019-01-23 11:55:28",
     *   "updated_at": "2019-01-23 11:55:28",
     *   "note": null,
     *   "date_ordered": "2019-01-23 11:55:28",
     *   "currency": "TL",
     *   "payment_type_id": 1,
     *   "baskets": [
     *       {
     *           "id": 1,
     *           "order_id": 1,
     *           "product_id": 1,
     *           "product_name": "Makarna",
     *           "description": "Bildiğimiz makarna.",
     *           "price": "10.00",
     *           "created_at": "2019-01-28 08:40:53",
     *           "updated_at": "2019-01-28 08:40:53",
     *           "piece": 0
     *       },
     *       {
     *           "id": 2,
     *           "order_id": 1,
     *           "product_id": 2,
     *           "product_name": "Tavuklu Makarna",
     *           "description": "Bildiğimiz tavuklu makarna.",
     *           "price": "10.00",
     *           "created_at": "2019-01-28 08:40:53",
     *           "updated_at": "2019-01-28 08:40:53",
     *           "piece": 0
     *       }
     *   ],
     *   "user_contact": {
     *       "id": 1,
     *       "user_id": 1,
     *       "name": "Ev",
     *       "phone": "5304783400",
     *       "address": "Sapanbağları mah.",
     *       "created_at": "2019-01-03 13:29:09",
     *       "updated_at": "2019-01-03 13:29:09"
     *   }
     * }
     * ]
     *
     */
    public function show(Order $order)
    {
        // $products = $order->baskets->toArray();
        $order = $order->with('baskets')->with('userContact')->with('user')->where('id', $order->id)->get();
        // $order = array_merge($order, $products);
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
     * @bodyParam note string required The note of the order.
     * @bodyParam date_ordered timestamp required The date_ordered of the order.
     * @bodyParam currency string required The currency of the order.
     * @bodyParam payment_type_id int required The payment type of the order.
     *
     * @response {
     *      "id": 9,
     *      "user_id": 1,
     *      "user_contact_id": 1,
     *      "status": "1",
     *      "price": "15.00",
     *      "note": "Lütfen çatal bıçak koymayın."
     *      "date_ordered": "2018-12-17 10:06:40",
     *      "currency": "TL",
     *      "payment_type_id": "1"
     * }
     */
    public function update(Request $request, Order $order)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'user_contact_id' => 'required|exists:user_contacts,id',
            'status' => 'required',
            'price' => 'required',
            'currency' => 'required',
            'payment_type_id' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $order->update($request->all());

        return response()->json($order);
    }


    public function orderUpdated(Request $request, Order $order)
    {
        $order->status = $request->status;
        $order->save();

        $data = [];
        if($request->status == 0) {
            $data['status'] = 'İptal Edildi.';
        } elseif ($request->status == 1) {
            $data['status'] = 'Bekliyor.';
        } elseif ($request->status == 2) {
            $data['status'] = 'Onaylandı.';
        } elseif ($request->status == 3) {
            $data['status'] = 'Gönderildi.';
        }

        $user = User::where('id', $order->user_id)->first();

        $userData = [
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email
        ];

        Mail::send('emails.order_updated', $data, function($message) use ($userData) {
            $message->to($userData['email'], $userData['name'] . ' ' . $userData['surname'])->subject
            ('Sipariş durumu');
            $message->from('info@maycreator.com', env('APP_NAME'));
        });

        if (Mail::failures()) {
            return response()->json(['status' => false], 401);
        }

        return response()->json(['status' => true]);
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
        $order->baskets()->delete();
        return response()->json(['status' => true]);
    }
}
