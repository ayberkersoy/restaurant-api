<?php

namespace App\Http\Controllers;

use Image;
use Validator;
use App\Campaign;
use Illuminate\Http\Request;

/**
 * @group Campaign Management
 *
 * APIs for managing campaigns
 */
class CampaignController extends Controller
{
    public function indexView()
    {
        return view('admin.campaigns.index');
    }

    public function createView()
    {
        return view('admin.campaigns.create');
    }

    public function editView($id)
    {
        return view('admin.campaigns.edit', compact('id'));
    }

    /**
     * Index all campaigns
     * @response {
     *      "id": 1,
     *      "name": "Bu hafta ürünlerde %10 indirim!",
     *      "description": "Haftanın her günü 13:00-15:00 arası ana yemek kategorisindeki bütün ürünler %10 indirimli!",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function index()
    {
        return response()->json(Campaign::all());
    }

    /**
     * Create a new campaign
     *
     * @bodyParam name string required The name of the campaign.
     * @bodyParam description string required The description of the campaign.
     * @bodyParam image_url file required The image of the campaign.
     *
     * @response {
     *      "id": 1,
     *      "name": "Bu hafta ürünlerde %10 indirim!",
     *      "description": "Haftanın her günü 13:00-15:00 arası ana yemek kategorisindeki bütün ürünler %10 indirimli!",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image_url' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        if ($request->hasFile('image_url')) {
            $image = $request->image_url->store('img/campaigns');
            $img = Image::make(public_path($image));
            $img->fit(1280, 720);
            $img->save(public_path($image));
        }

        $campaign = Campaign::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $image,
        ]);

        return response()->json($campaign);
    }

    /**
     * Show specific campaign
     * @queryParam id required The id of the campaign.
     * @response {
     *      "id": 1,
     *      "name": "Bu hafta ürünlerde %10 indirim!",
     *      "description": "Haftanın her günü 13:00-15:00 arası ana yemek kategorisindeki bütün ürünler %10 indirimli!",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function show(Campaign $campaign)
    {
        return response()->json($campaign);
    }

    /**
     * Update specific campaign
     * @queryParam id required The id of the campaign.
     * @bodyParam id int required The id of the campaign. Example: 9
     * @bodyParam name string required The name of the campaign.
     * @bodyParam description string required The description of the campaign.
     * @bodyParam image_url file required The image of the campaign.
     * @response {
     *      "id": 9,
     *      "name": "Bu hafta ürünlerde %10 indirim!",
     *      "description": "Haftanın her günü 13:00-15:00 arası ana yemek kategorisindeki bütün ürünler %10 indirimli!",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function update(Request $request, Campaign $campaign)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        if ($request->hasFile('image_url')) {
            $image = $request->image_url->store('img/campaigns');
            $img = Image::make(public_path($image));
            $img->fit(1280, 720);
            $img->save(public_path($image));
            $campaign->image_url = $image;
        }

        $campaign->name = $request->name;
        $campaign->description = $request->description;

        $campaign->save();

        return response()->json($campaign);
    }

    /**
     * Delete specific campaign
     *
     * @queryParam id required The id of the campaign.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        return response()->json(['status' => true]);
    }
}
