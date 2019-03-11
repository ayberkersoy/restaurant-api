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
        return response()->json(Comment::with('product')->get());
    }

    public function indexView()
    {
        return view('admin.comments.index');
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
     *      "id": 9,
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

    /**
     * Homepage reviews
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "product_id": 1,
     *      "comment": "Yemekler, hizmet her şey harikaydı.",
     *      "stars": "4",
     *      "user": {
     *          "id": 1,
     *          "name": "Ayberk",
     *          "surname": "Ersoy",
     *          "email": "ayberkersoy@gmail.com",
     *          "email_verified_at": null,
     *          "avatar": "https://via.placeholder.com/300x300",
     *          "status": "user",
     *          "created_at": "2018-12-27 11:18:38",
     *          "updated_at": "2018-12-27 11:18:38"
     *      }
     * }
     */
    public function getReviews()
    {
        $comments = Comment::with('user')->where('stars', 5)->take(5)->get();
        return response()->json($comments);
    }
}
