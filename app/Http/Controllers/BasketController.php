<?php

namespace App\Http\Controllers;

use Validator;
use App\Basket;
use App\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
        return response()->json(Basket::all());
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'order_id' => 'required|integer|exists:orders,id',
            'product_id' => 'required|integer|exists:products,id'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }
        $product = Product::findOrFail($request->product_id);
        $basket = Basket::create(
            array_merge($request->all(), [
                'product_name' => $product->name,
                'description' => $product->description,
                'price' => $product->price
            ])
        );

        return response()->json($basket);
    }

    public function show(Basket $basket)
    {
        return response()->json($basket);
    }

    public function update(Request $request, Basket $basket)
    {
        $validation = Validator::make($request->all(), [
            'order_id' => 'required|integer|exists:orders,id',
            'product_id' => 'required|integer|exists:products,id'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }
        $product = Product::findOrFail($request->product_id);
        $basket->update(
            array_merge($request->all(), [
                'product_name' => $product->name,
                'description' => $product->description,
                'price' => $product->price
            ])
        );

        return response()->json($basket);
    }

    public function destroy(Basket $basket)
    {
        $basket->delete();
        return response()->json(['status' => true]);
    }
}
