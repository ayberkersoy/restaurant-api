<?php

namespace App\Http\Controllers;

use App\Company;
use Validator;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return response()->json(Company::all());
    }

    public function show(Company $company)
    {
        return response()->json($company);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255|min:6',
            'phone' => 'required|max:255|min:6',
            'logo' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $company = Company::create(
            array_merge($request->all(), [
                'slug' => str_slug($request->name)
            ])
        );

        return response()->json($company);
    }
}
