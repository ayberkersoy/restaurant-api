<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Validator;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;

/**
 * @group User Management
 *
 * APIs for managing users
 */
class UserController extends Controller
{
    public $successStatus = 200;

    public function indexView()
    {
        return view('admin.users.index');
    }

    public function createView()
    {
        return view('admin.users.create');
    }

    public function editView($id)
    {
        return view('admin.users.edit', compact('id'));
    }
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
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|max:255|confirmed'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $user = User::create(
            array_merge(
                array_except($request->all(), ['password', 'avatar']),
                [
                    'password' => bcrypt($request->password),
                    'avatar' => 'https://api.maycreator.com/img/user-default.png'
                ]
            )
        );

        Mail::send('emails.first_register', $request->toArray(), function($message) {
            $message->to(request('email'), request('name') . ' ' . request('surname'))->subject
                ('Kaydınız oluşturuldu');
            $message->from('info@maycreator.com', env('APP_NAME'));
        });

        if (Mail::failures()) {
            return response()->json(['status' => false], 401);
        }

        return response()->json($user, $this->successStatus);
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
            'password' => 'sometimes|required|min:6|max:255|confirmed'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar->store('avatars');
            $user->avatar = env('APP_URL') . '/' . $avatar;
        }

        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->save();

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
        $user->comments()->delete();
        $user->contacts()->delete();
        $user->favourites()->delete();
        $user->orders()->delete();
        $user->reservations()->delete();
        return response()->json(['status' => true]);
    }

    /**
     * Send password recovery email
     * @queryParam email required The email of the user.
     *
     * @response {
     *      "status": true
     * }
     */
    public function sendEmail(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $token = Password::getRepository()->create($user);

        Mail::send(['text' => 'emails.password'], ['token' => $token], function (Message $message) use ($user) {
            $message->subject(config('app.name') . ' Password Reset Link');
            $message->to($user->email);
        });

        if (Mail::failures()) {
            return response()->json(['status' => false], 401);
        }

        return response()->json(['status' => true], $this->successStatus);
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
     * List user's reservations
     *
     * @queryParam id required The id of the user.
     *
     * @response {
     *      "id": 1,
     *      "reservation_date": "2019-01-05",
     *      "reservation_hour": "17:00:00",
     *      "people_count": 4,
     *      "name": "Ahmet",
     *      "surname": "Mehmet",
     *      "phone": "5304783400",
     *      "note": "Manzaralı masa olursa güzel olur."
     * }
     */
    public function reservations(User $user)
    {
        return response()->json($user->reservations);
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
        $input['avatar'] = 'https://api.maycreator.com/img/user-default.png';
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
