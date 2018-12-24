<?php

namespace App\Http\Controllers;

use Validator;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return response()->json(Comment::all());
    }

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

    public function show(Comment $comment)
    {
        return response()->json($comment);
    }

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

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(['status' => true]);
    }
}
