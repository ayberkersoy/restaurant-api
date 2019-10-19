<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Image;
use Validator;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Favourite;

/**
 * @group Product Management
 *
 * APIs for managing products
 */
class ProductController extends Controller
{
    public function indexView()
    {
        return view('admin.products.index');
    }

    public function createView()
    {
        return view('admin.products.create');
    }

    public function editView($id)
    {
        return view('admin.products.edit', compact('id'));
    }
    /**
     * Index all products
     * @response {
     *      "id": 1,
     *      "name": "Makarna",
     *      "description": "Bildiğimiz makarna",
     *      "image_url": "https://via.placeholder.com/500x300",
     *      "category_id": 1,
     *      "price": "10.00",
     *      "currency": "TL"
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
     *      "price": "10.00",
     *      "currency": "TL"
     * }
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image_url' => 'required|max:8192',
            'category_id' => 'required',
            'price' => 'required'
        ], [
            'name.required' => 'Ürün adı alanı boş geçilemez.',
            'image_url.required' => 'Ürün resmi alanı boş geçilemez.',
            'image_url.max' => 'Ürün resmi en fazla 8 MB boyutunda olabilir.',
            'category_id.required' => 'Ürün kategorisi alanı boş geçilemez.',
            'price.required' => 'Ürün fiyatı alanı boş geçilemez.',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all(), 422);
        }

        $isFeatured = $request->isFeatured ? 1 : 0;
        $product = $request->all();
        if($request->hasFile('image_url')) {
            $image = $request->image_url->store('img/products');
            $img = Image::make(public_path($image));
            $img->fit(1280, 720);
            $img->save(public_path($image));
            $product['image_url'] = env('APP_URL'). '/' .$image;
        }

        $product['currency'] = 'TL';
        $product['isFeatured'] = $isFeatured;

        $product = Product::create($product);

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
     *      "price": "10.00",
     *      "currency": "TL",
     *      "isFeatured": 1,
     *      "stars": 3.5,
     *      "favourite": true
     * }
     */
    public function show(Product $product)
    {
        $favourite = false;
        if (auth('api')->check()) {
            $user = auth('api')->user();
            $favourite = Favourite::where('product_id', $product->id)
                            ->where('user_id', $user->id)->first();
            if ($favourite) {
                $favourite = true;
            }
        }
        $product = $product->select(
            'products.*',
            DB::raw('avg(comments.stars) AS stars')
        )
            ->where('products.id', $product->id)
            ->leftjoin('comments', 'comments.product_id', '=', 'products.id')
            ->groupBy('comments.product_id')
            ->first();
        if($product->stars == null) {
            $product->stars = 5;
        }
        $product = array_merge($product->toArray(), ['favourite' => $favourite]);
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
     *      "price": "10.00",
     *      "currency": "TL"
     * }
     */
    public function update(Request $request, Product $product)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'price' => 'required',
            'image_url' => 'sometimes|max:8192'
        ], [
            'name.required' => 'Ürün adı alanı boş geçilemez.',
            'image_url.max' => 'Ürün resmi en fazla 8 MB boyutunda olabilir.',
            'category_id.required' => 'Ürün kategorisi alanı boş geçilemez.',
            'price.required' => 'Ürün fiyatı alanı boş geçilemez.',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all(), 422);
        }

        $productArr = $request->except(['image_url', 'category_id']);

        if($request->hasFile('image_url')) {
            $image = $request->image_url->store('img/products');
            $img = Image::make(public_path($image));
            $img->fit(1280, 720);
            $img->save(public_path($image));
            $productArr['image_url'] = env('APP_URL'). '/' .$image;
        }

        if($request->category_id != 0) {
            $productArr['category_id'] = $request->category_id;
        }

        $productArr['currency'] = 'TL';

        $product->update($productArr);

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
        $product->comments()->delete();
        return response()->json(['status' => true]);
    }

    /**
     * List product's comments
     *
     * @queryParam id required The id of the product.
     *
     * @response [
     * {
     *   "id": 1,
     *   "user_id": 2,
     *   "product_id": 1,
     *   "comment": "Makarna çok güzeldi.",
     *   "stars": 5,
     *   "created_at": "2019-01-03 11:16:01",
     *   "updated_at": "2019-01-03 11:16:01",
     *   "user": {
     *       "id": 2,
     *       "name": "Ayberk",
     *       "surname": "Ersoy",
     *       "email": "ayberkersoy@gmail.com",
     *       "email_verified_at": null,
     *       "avatar": null,
     *       "status": "user",
     *       "created_at": "2018-12-27 11:00:17",
     *       "updated_at": "2018-12-27 11:00:17"
     *   }
     * }
     * ]
     */
    public function getComments(Product $product)
    {
        $comments = $product->comments()->with('user')->get();
        return response()->json($comments);
    }

    /**
     * Show specific products by category
     * @queryParam id required The id of the category.
     * @response [{
     *   "id": 1,
     *   "name": "Makarna",
     *   "description": null,
     *   "image_url": "https://via.placeholder.com/500x300",
     *   "category_id": 1,
     *   "created_at": "2018-12-17 10:06:59",
     *   "updated_at": "2018-12-17 10:06:59",
     *   "price": "10.00",
     *   "currency": "TL",
     *   "isFeatured": "1",
     *   "stars": 5
     * },
     * {
     *   "id": 2,
     *   "name": "Tavuklu Makarna",
     *   "description": null,
     *   "image_url": "https://via.placeholder.com/500x300",
     *   "category_id": 1,
     *   "created_at": "2018-12-17 10:06:59",
     *   "updated_at": "2018-12-17 10:06:59",
     *   "price": "10.00",
     *   "currency": "TL",
     *   "isFeatured": "1",
     *   "stars": 5
     * }]
     *
     */
    public function getProductsByCategory(Category $category)
    {
        $products = $category->products()->select(
            'products.*',
            DB::raw('avg(comments.stars) AS stars')
        )
            ->join('comments', 'comments.product_id', '=', 'products.id')
            ->groupBy('comments.product_id')
            ->get();
        return response()->json($products);
    }

    /**
     * Show specific featured products by category
     * @queryParam id required The id of the category.
     * @response [{
     *   "id": 1,
     *   "name": "Makarna",
     *   "description": null,
     *   "image_url": "https://via.placeholder.com/500x300",
     *   "category_id": 1,
     *   "created_at": "2018-12-17 10:06:59",
     *   "updated_at": "2018-12-17 10:06:59",
     *   "price": "10.00",
     *   "currency": "TL",
     *   "isFeatured": "1",
     *   "stars": 5
     * },
     * {
     *   "id": 2,
     *   "name": "Tavuklu Makarna",
     *   "description": null,
     *   "image_url": "https://via.placeholder.com/500x300",
     *   "category_id": 1,
     *   "created_at": "2018-12-17 10:06:59",
     *   "updated_at": "2018-12-17 10:06:59",
     *   "price": "10.00",
     *   "currency": "TL",
     *   "isFeatured": "1",
     *   "stars": 5
     * }]
     *
     */
    public function getFeaturedProductsByCategory(Category $category)
    {
        $products = $category->products()->select(
            'products.*',
            DB::raw('avg(comments.stars) AS stars')
        )
            ->join('comments', 'comments.product_id', '=', 'products.id')
            ->groupBy('comments.product_id')
            ->get();
        return response()->json($products);
    }
}
