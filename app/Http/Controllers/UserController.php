<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\User;
use App\Product;
use Illuminate\Http\Request;

/**
 * @group User Management
 *
 * APIs for managing users
 */
class UserController extends Controller
{
    public $successStatus = 200;

    /**
     * Index all users
     * @response {
     *      "id": 1,
     *      "name": "Ahmet",
     *      "surname": "Mehmet",
     *      "email": "info@bosphorustech.com",
     *      "avatar": "https://via.placeholder.com/300x300",
     *      "status": "user"
     * }
     */
    public function index()
    {
        return response()->json(User::all());
    }

    /**
     * Create a new user
     *
     * @bodyParam name string required The name of the user.
     * @bodyParam surname string required The surname of the user.
     * @bodyParam email string required The email of the user.
     * @bodyParam password string required The password of the user.
     * @bodyParam password_confirmation string required The password confirmation of the user.
     * @bodyParam status string required The status of the user.
     *
     * @response {
     *      "id": 1,
     *      "name": "Ahmet",
     *      "surname": "Mehmet",
     *      "email": "info@bosphorustech.com",
     *      "avatar": "https://via.placeholder.com/300x300",
     *      "status": "user"
     * }
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:255|confirmed'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $user = User::create(
            array_merge(
                array_except($request->all(), ['password']),
                ['password' => bcrypt($request->password)]
            )
        );

        return response()->json($user);
    }

    /**
     * Show specific user
     * @queryParam id required The id of the user.
     * @response {
     *      "id": 1,
     *      "name": "Ahmet",
     *      "surname": "Mehmet",
     *      "email": "info@bosphorustech.com",
     *      "avatar": "https://via.placeholder.com/300x300",
     *      "status": "user"
     * }
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update specific user
     * @queryParam id required The id of the user.
     * @bodyParam id int required The id of the user. Example: 9
     * @bodyParam name string required The name of the user.
     * @bodyParam surname string required The surname of the user.
     * @bodyParam email string required The email of the user.
     * @bodyParam password string required The password of the user.
     * @bodyParam password_confirmation string required The password confirmation of the user.
     * @bodyParam status string required The status of the user.
     *
     * @response {
     *      "id": 9,
     *      "name": "Ahmet",
     *      "surname": "Mehmet",
     *      "email": "info@bosphorustech.com",
     *      "avatar": "https://via.placeholder.com/300x300",
     *      "status": "user"
     * }
     */
    public function update(Request $request, User $user)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'sometimes|required|min:6|max:255'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        if ($request->has('password')) {
            $user->update(
                array_merge(
                    array_except($request->all(), ['password']),
                    ['password' => bcrypt($request->password)]
                )
            );
        } else {
            $user->update($request->all());
        }

        return response()->json($user);
    }

    /**
     * Delete specific user
     *
     * @queryParam id required The id of the user.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['status' => true]);
    }

    /**
     * List user's favourites
     *
     * @queryParam id required The id of the user.
     *
     * @response [
     * {
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
     * }
     * ]
     */
    public function favourites(User $user)
    {
        $favourites = [];
        foreach ($user->favourites as $favourite) {
            $product = Product::findOrFail($favourite->product_id);
            array_push($favourites, $product);
        }
        return response()->json($favourites);
    }

    /**
     * List user's contacts
     *
     * @queryParam id required The id of the user.
     *
     * @response [
     * {
     *   "id": 1,
     *   "user_id": 2,
     *   "name": "Ev",
     *   "phone": "5304783400",
     *   "address": "Sapanbaglari mah.",
     *   "created_at": "2019-01-03 10:32:12",
     *   "updated_at": "2019-01-03 10:32:12"
     * },
     * {
     *   "id": 2,
     *   "user_id": 2,
     *   "name": "Ofis",
     *   "phone": "5304783400",
     *   "address": "yenisehir mah",
     *   "created_at": "2019-01-03 10:32:12",
     *   "updated_at": "2019-01-03 10:32:12"
     * }
     * ]
     */
    public function contacts(User $user)
    {
        return response()->json($user->contacts);
    }

    /**
     * List user's comments
     *
     * @queryParam id required The id of the user.
     *
     * @response {
     *      "id": 1,
     *      "user_id": 1,
     *      "product_id": 1,
     *      "comment": "Yemekler, hizmet her şey harikaydı.",
     *      "stars": "4",
     *         "product": {
     *         "id": 1,
     *         "name": "Makarna",
     *         "description": "Bildiğimiz makarna.",
     *         "image_url": "https://via.placeholder.com/1280x720",
     *         "category_id": 3,
     *         "created_at": "2018-12-28 09:43:10",
     *         "updated_at": "2018-12-28 09:43:10",
     *         "price": "10.00",
     *         "currency": "TL",
     *         "isFeatured": 1
     *   }
     * }
     */
    public function comments(User $user)
    {
        return response()->json($user->comments()->with('product')->get());
    }

    /**
     * List user's orders
     *
     * @queryParam id required The id of the user.
     *
     * @response {
     *   "id": 1,
     *   "user_id": 1,
     *   "user_contact_id": 1,
     *   "status": 1,
     *   "price": "50.00",
     *   "created_at": "2019-01-23 11:55:28",
     *   "updated_at": "2019-01-23 11:55:28",
     *   "note": null,
     *   "date_ordered": "2019-01-23 11:55:28",
     *   "currency": "TL",
     *   "payment_type_id": 1,
     *   "user_contact": {
     *       "id": 1,
     *       "user_id": 1,
     *       "name": "Ev",
     *       "phone": "5304783400",
     *       "address": "Sapanbağları mah.",
     *       "created_at": "2019-01-03 13:29:09",
     *       "updated_at": "2019-01-03 13:29:09"
     *   }
     * }
     */
    public function orders(User $user)
    {
        return response()->json($user->orders()->with('userContact')->get());
    }

    /**
     * Register a user
     *
     * @bodyParam name string required The name of the user.
     * @bodyParam surname string required The surname of the user.
     * @bodyParam email string required The email of the user.
     * @bodyParam password string required The password of the user.
     * @bodyParam password_confirmation string required The password confirmation of the user.
     *
     * @response {
     *      "success": {
     *          "token": "REALLYLONGTOKEN"
     *      }
     * }
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:255|confirmed'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('AppName')->accessToken;
        return response()->json(['success' => $success], $this->successStatus);
    }

    /**
     * Login a user
     *
     * @bodyParam email string required The email of the user.
     * @bodyParam password string required The password of the user.
     *
     * @response {
     *      "success": {
     *          "token": "REALLYLONGTOKEN"
     *      }
     * }
     */
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('AppName')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    /**
     * Get authenticated user
     *
     * @response {
     *      "id": 3,
     *      "name": "Bosphorus",
     *      "surname": "Tech",
     *      "email": "info@bosphorustech.com",
     *      "email_verified_at": null,
     *      "avatar": null,
     *      "status": "user",
     *      "created_at": "2019-01-03 10:35:51",
     *      "updated_at": "2019-01-03 10:35:51"
     * }
     */
    public function getUser()
    {
        $user = Auth::user();
        return response()->json($user);
    }
}
