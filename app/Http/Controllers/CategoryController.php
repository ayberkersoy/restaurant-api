<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

/**
 * @group Category Management
 *
 * APIs for managing categories
 */
class CategoryController extends Controller
{
    /**
     * Index all categories
     * @response {
     *      "id": 1,
     *      "name": "Tatlılar",
     *      "description": "Birbirinden lezzetli tatlılarımız",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function index()
    {
        return response()->json(Category::all());
    }

    /**
     * Create a new category
     *
     * @bodyParam name string required The name of the category.
     * @bodyParam description string required The description of the category.
     * @bodyParam image_url file required The image of the category.
     *
     * @response {
     *      "id": 1,
     *      "name": "Tatlılar",
     *      "description": "Birbirinden lezzetli tatlılarımız",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image_url' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $category = Category::create($request->all());

        return response()->json($category);
    }

    /**
     * Show specific category
     * @queryParam id required The id of the category.
     * @response {
     *      "id": 1,
     *      "name": "Tatlılar",
     *      "description": "Birbirinden lezzetli tatlılarımız",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function show(Category $category)
    {
        return response()->json($category);
    }

    /**
     * Update specific category
     * @queryParam id required The id of the category.
     * @bodyParam id int required The id of the category. Example: 9
     * @bodyParam name string required The name of the category.
     * @bodyParam description string required The description of the category.
     * @bodyParam image_url file required The image of the category.
     * @response {
     *      "id": 9,
     *      "name": "Tatlılar",
     *      "description": "Birbirinden lezzetli tatlılarımız",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function update(Request $request, Category $category)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image_url' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $category->update($request->all());

        return response()->json($category);
    }

    /**
     * Delete specific category
     *
     * @queryParam id required The id of the category.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['status' => true]);
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
     *   "price": "10.00"
     * },
     * {
     *   "id": 2,
     *   "name": "Tavuklu Makarna",
     *   "description": null,
     *   "image_url": "https://via.placeholder.com/500x300",
     *   "category_id": 1,
     *   "created_at": "2018-12-17 10:06:59",
     *   "updated_at": "2018-12-17 10:06:59",
     *   "price": "10.00"
     * }]
     *
     */
    public function getProductsByCategory(Category $category)
    {
        return response()->json($category->products);
    }
}
