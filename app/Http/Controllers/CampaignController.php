<?php

namespace App\Http\Controllers;

use Validator;
use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        return response()->json(Campaign::all());
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image_url' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $campaign = Campaign::create($request->all());

        return response()->json($campaign);
    }

    public function show(Campaign $campaign)
    {
        return response()->json($campaign);
    }

    public function update(Request $request, Campaign $campaign)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image_url' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $campaing->update($request->all());

        return response()->json($campaign);
    }

    public function destroy(Campaign $campaign)
    {
        $campaing->delete();
        return response()->json(['status' => true]);
    }
}
