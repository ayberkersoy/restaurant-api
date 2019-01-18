<?php

namespace App\Http\Controllers;

use Validator;
use App\Favourite;
use Illuminate\Http\Request;
use App\Product;
use App\User;

/**
 * @group Favourite Management
 *
 * APIs for managing favourites
 */
class FavouriteController extends Controller
{
    public function index()
    {
        return response()->json(Favourite::all());
    }

    /**
     * Create a new favourite
     *
     * @bodyParam user_id int required The id of the user.
     * @bodyParam product_id int required The id of the product.
     *
     * @response {
     *      "status": true
     * }
     */
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

        return response()->json(['status' => true]);
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

    /**
     * Delete specific favourite
     *
     * @queryParam product_id required The id of the product.
     * @queryParam user_id required The id of the user.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(Product $product, User $user)
    {
        $favourite = Favourite::where('product_id', $product->id)
                    ->where('user_id', $user->id)
                    ->firstOrFail();
        $favourite->delete();
        return response()->json(['status' => true]);
    }
}
