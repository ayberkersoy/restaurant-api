<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all());
    }

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

    public function show(Category $category)
    {
        return response()->json($category);
    }

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

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['status' => true]);
    }
}
