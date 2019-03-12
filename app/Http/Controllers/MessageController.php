<?php

namespace App\Http\Controllers;

use Validator;
use App\Message;
use Illuminate\Http\Request;

/**
 * @group Message Management
 *
 * APIs for managing messages
 */
class MessageController extends Controller
{
    public function indexView()
    {
        return view('admin.messages.index');
    }

    public function editView($id)
    {
        return view('admin.messages.edit', compact('id'));
    }

    /**
     * Index all messages
     * @response {
     *      "id": 1,
     *      "name": "Ahmet Mehmet",
     *      "about": "Öneri",
     *      "message": "Güzel bir platform olmuş."
     *      "phone": "5304783400"
     * }
     */
    public function index()
    {
        return response()->json(Message::all());
    }

    /**
     * Create a new message
     *
     * @bodyParam name string required The name of the message.
     * @bodyParam about string required The about of the message.
     * @bodyParam message string required The message of the message.
     * @bodyParam phone string required The phone of the message.
     *
     * @response {
     *      "id": 1,
     *      "name": "Ahmet Mehmet",
     *      "about": "Öneri",
     *      "message": "Güzel bir platform olmuş."
     *      "phone": "5304783400"
     * }
     */
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

    /**
     * Show specific message
     *
     * @queryParam id required The id of the message.
     *
     * @response {
     *      "id": 1,
     *      "name": "Ahmet Mehmet",
     *      "about": "Öneri",
     *      "message": "Güzel bir platform olmuş."
     *      "phone": "5304783400"
     * }
     */
    public function show(Message $message)
    {
        return response()->json($message);
    }

    /**
     * Update specific message
     *
     * @queryParam id required The id of the message.
     * @bodyParam id int required The id of the category. Example: 9
     * @bodyParam name string required The name of the message.
     * @bodyParam about string required The about of the message.
     * @bodyParam message string required The message of the message.
     * @bodyParam phone string required The phone of the message.
     *
     * @response {
     *      "id": 9,
     *      "name": "Ahmet Mehmet",
     *      "about": "Öneri",
     *      "message": "Güzel bir platform olmuş."
     *      "phone": "5304783400"
     * }
     */
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

    /**
     * Delete specific message
     *
     * @queryParam id required The id of the message.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return response()->json(['status' => true]);
    }
}
