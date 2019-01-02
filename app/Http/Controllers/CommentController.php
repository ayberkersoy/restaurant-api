<?php

namespace App\Http\Controllers;

use Validator;
use App\Comment;
use Illuminate\Http\Request;

/**
 * @group Comment Management
 *
 * APIs for managing comments
 */
class CommentController extends Controller
{
    /**
     * Index all comments
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "product_id": 1,
     *      "comment": "Yemekler, hizmet her şey harikaydı.",
     *      "stars": "4",
     * }
     */
    public function index()
    {
        return response()->json(Comment::all());
    }

    /**
     * Create a new comment
     *
     * @bodyParam user_id int required The id of the user.
     * @bodyParam product_id int required The id of the product.
     * @bodyParam comment string required The content of the comment.
     * @bodyParam stars double required The stars of the comment.
     *
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "product_id": 1,
     *      "comment": "Yemekler, hizmet her şey harikaydı.",
     *      "stars": "4",
     * }
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'comment' => 'required|max:255|min:6',
            'stars' => 'required|min:0|max:5'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $comment = Comment::create($request->all());

        return response()->json($comment);
    }

    /**
     * Show specific comment
     * @queryParam id required The id of the comment.
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "product_id": 1,
     *      "comment": "Yemekler, hizmet her şey harikaydı.",
     *      "stars": "4",
     * }
     */
    public function show(Comment $comment)
    {
        return response()->json($comment);
    }

    /**
     * Update specific comment
     * @queryParam id required The id of the comment.
     * @bodyParam id int required The id of the category. Example: 9
     * @bodyParam user_id int required The id of the user.
     * @bodyParam product_id int required The id of the product.
     * @bodyParam comment string required The content of the comment.
     * @bodyParam stars double required The stars of the comment.
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "product_id": 1,
     *      "comment": "Yemekler, hizmet her şey harikaydı.",
     *      "stars": "4",
     * }
     */
    public function update(Request $request, Comment $comment)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'comment' => 'required|max:255|min:6',
            'stars' => 'required|min:0|max:5'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $comment->update($request->all());

        return response()->json($comment);
    }

    /**
     * Delete specific comment
     *
     * @queryParam id required The id of the comment.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(['status' => true]);
    }
}
