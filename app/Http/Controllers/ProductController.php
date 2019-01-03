<?php

namespace App\Http\Controllers;

use Validator;
use App\Product;
use Illuminate\Http\Request;

/**
 * @group Product Management
 *
 * APIs for managing products
 */
class ProductController extends Controller
{
    /**
     * Index all products
     * @response {
     *      "id": 1,
     *      "name": "Makarna",
     *      "description": "Bildiğimiz makarna",
     *      "image_url": "https://via.placeholder.com/500x300",
     *      "category_id": 1,
     *      "price": "10.00"
     * }
     */
    public function index()
    {
        return response()->json(Product::all());
    }

    /**
     * Create a new product
     *
     * @bodyParam name string required The name of the product.
     * @bodyParam description string optional The description of the product.
     * @bodyParam image_url file required The message of the product.
     * @bodyParam category_id int required The category id of the product.
     * @bodyParam price decimal required The price of the product.
     *
     * @response {
     *      "id": 1,
     *      "name": "Makarna",
     *      "description": "Bildiğimiz makarna",
     *      "image_url": "https://via.placeholder.com/500x300",
     *      "category_id": 1,
     *      "price": "10.00"
     * }
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image_url' => 'required',
            'category_id' => 'required',
            'price' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $product = Product::create($request->all());

        return response()->json($product);
    }

    /**
     * Show specific product
     *
     * @queryParam id required The id of the product.
     *
     * @response {
     *      "id": 1,
     *      "name": "Makarna",
     *      "description": "Bildiğimiz makarna",
     *      "image_url": "https://via.placeholder.com/500x300",
     *      "category_id": 1,
     *      "price": "10.00"
     * }
     */
    public function show(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Update specific product
     *
     * @queryParam id required The id of the product.
     * @bodyParam id int required The id of the category. Example: 9
     * @bodyParam name string required The name of the product.
     * @bodyParam description string optional The description of the product.
     * @bodyParam image_url file required The message of the product.
     * @bodyParam category_id int required The category id of the product.
     * @bodyParam price decimal required The price of the product.
     *
     * @response {
     *      "id": 9,
     *      "name": "Makarna",
     *      "description": "Bildiğimiz makarna",
     *      "image_url": "https://via.placeholder.com/500x300",
     *      "category_id": 1,
     *      "price": "10.00"
     * }
     */
    public function update(Request $request, Product $product)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image_url' => 'required',
            'category_id' => 'required',
            'price' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $product->update($request->all());

        return response()->json($product);
    }

    /**
     * Delete specific product
     *
     * @queryParam id required The id of the product.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['status' => true]);
    }

    public function getComments(Product $product)
    {
        $comments = $product->comments()->with('user')->get();
        return response()->json($comments);
    }
}
