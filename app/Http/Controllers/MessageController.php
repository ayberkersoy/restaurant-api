<?php

namespace App\Http\Controllers;

use Validator;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return response()->json(Message::all());
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'about' => 'required|max:255',
            'message' => 'required|max:255|min:6',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $message = Message::create($request->all());

        return response()->json($message);
    }

    public function show(Message $message)
    {
        return response()->json($message);
    }

    public function update(Request $request, Message $message)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'about' => 'required|max:255',
            'message' => 'required|max:255|min:6',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $message->update($request->all());

        return response()->json($message);
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return response()->json(['status' => true]);
    }
}
