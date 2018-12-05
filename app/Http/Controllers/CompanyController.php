<?php

use App\Company;

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    public function index()
    {
        return response()->json(Company::all());
    }
}
