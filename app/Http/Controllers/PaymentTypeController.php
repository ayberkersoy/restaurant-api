<?php

namespace App\Http\Controllers;

use Validator;
use App\PaymentType;
use Illuminate\Http\Request;

/**
 * @group Payment Type Management
 *
 * APIs for managing payment types
 */
class PaymentTypeController extends Controller
{
    public function indexView()
    {
        return view('admin.paymentTypes.index');
    }

    public function createView()
    {
        return view('admin.paymentTypes.create');
    }

    public function editView($id)
    {
        return view('admin.paymentTypes.edit', compact('id'));
    }

    /**
     * Index all payment types
     * @response {
     *      "id": 1,
     *      "name": "Nakit"
     * }
     */
    public function index()
    {
        return response()->json(PaymentType::all());
    }

    /**
     * Create a new payment type
     *
     * @bodyParam name string required The name of the payment type.
     *
     * @response {
     *      "id": 1,
     *      "name": "Nakit"
     * }
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ], [
            'name.required' => 'Ödeme tipi adı alanı boş geçilemez.'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all(), 422);
        }

        $paymentType = PaymentType::create($request->all());

        return response()->json($paymentType);
    }

    /**
     * Show specific payment type
     *
     * @queryParam id required The id of the payment type.
     *
     * @response {
     *      "id": 1,
     *      "name": "Nakit"
     * }
     */
    public function show(PaymentType $paymentType)
    {
        return response()->json($paymentType);
    }

    /**
     * Update specific payment type
     *
     * @queryParam id required The id of the payment type.
     * @bodyParam id int required The id of the payment type. Example: 9
     * @bodyParam name string required The name of the payment type.
     *
     * @response {
     *      "id": 9,
     *      "name": "Kredi Kartı"
     * }
     */
    public function update(Request $request, PaymentType $paymentType)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ], [
            'name.required' => 'Ödeme tipi adı alanı boş geçilemez.'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all(), 422);
        }

        $paymentType->update($request->all());

        return response()->json($paymentType);
    }

    /**
     * Delete specific payment type
     *
     * @queryParam id required The id of the payment type.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(PaymentType $paymentType)
    {
        $paymentType->delete();
        return response()->json(['status' => true]);
    }
}
