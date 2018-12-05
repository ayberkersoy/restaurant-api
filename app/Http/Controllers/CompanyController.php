<?php

namespace App\Http\Controllers;

use App\Company;

class CompanyController extends Controller
{
    public function index()
    {
        return response()->json(Company::all());
    }
}
