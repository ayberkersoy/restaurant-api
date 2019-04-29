<?php

namespace App\Http\Controllers;

use Image;
use Validator;
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

    public function indexView()
    {
        return view('admin.categories.index');
    }

    public function createView()
    {
        return view('admin.categories.create');
    }

    public function editView($id)
    {
        return view('admin.categories.edit', compact('id'));
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
            'image_url' => 'required|max:8192'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        if($request->hasFile('image_url')) {
            $image = $request->image_url->store('img/categories');
            $img = Image::make(public_path($image));
            $img->fit(1280, 720);
            $img->save(public_path($image));
        }

        $category = $request->all();
        $category['image_url'] = $image;
        $category = Category::create($category);

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
            'name' => 'required|max:255'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        if($request->hasFile('image_url')) {
            $image = $request->image_url->store('img/categories');
            $img = Image::make(public_path($image));
            $img->fit(1280, 720);
            $img->save(public_path($image));
        }

        $categoryArr = $request->except('image_url');
        if($request->hasFile('image_url')) {
            $categoryArr['image_url'] = $image;
        }
        $category->update($categoryArr);

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
        $category->products()->delete();
        return response()->json(['status' => true]);
    }
}
