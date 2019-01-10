<?php

namespace App\Http\Controllers;

use App\Company;
use Validator;
use Illuminate\Http\Request;

/**
 * @group Company Management
 *
 * APIs for managing companies
 */
class CompanyController extends Controller
{
    /**
     * Index all companies
     * @response {
     *      "id": 1,
     *      "name": "Bosphorus Tech",
     *      "slug": "bosphorus-tech",
     *      "address": "Yenisehir mah. Osmanli blv. No: 5/B Arwen Ofis D: 51 Pendik/Istanbul",
     *      "phone": "2164823125",
     *      "logo": "https://via.placeholder.com/300x100",
     *      "working_hours_day": "10:00",
     *      "working_hours_night": "23:00",
     *      "facebook": "https://facebook.com/bosphorus-tech",
     *      "twitter": "https://twitter.com/bosphorustech",
     *      "instagram": "https://instagram.com/bosphorustech",
     *      "about_text": "ABOUT US",
     *      "about_image": "https://via.placeholder.com/500x300",
     *      "locationx": "40.928010",
     *      "locationy": "29.309073"
     * }
     */
    public function index()
    {
        return response()->json(Company::all());
    }

    /**
     * Show specific company
     * @queryParam id required The id of the company.
     * @response {
     *      "id": 1,
     *      "name": "Bosphorus Tech",
     *      "slug": "bosphorus-tech",
     *      "address": "Yenisehir mah. Osmanli blv. No: 5/B Arwen Ofis D: 51 Pendik/Istanbul",
     *      "phone": "2164823125",
     *      "logo": "https://via.placeholder.com/300x100",
     *      "working_hours_day": "10:00",
     *      "working_hours_night": "23:00",
     *      "facebook": "https://facebook.com/bosphorus-tech",
     *      "twitter": "https://twitter.com/bosphorustech",
     *      "instagram": "https://instagram.com/bosphorustech",
     *      "about_text": "ABOUT US",
     *      "about_image": "https://via.placeholder.com/500x300",
     *      "locationx": "40.928010",
     *      "locationy": "29.309073"
     * }
     */
    public function show(Company $company)
    {
        return response()->json($company);
    }

    /**
     * Create a new company
     *
     * @bodyParam name string required The name of the company.
     * @bodyParam address string optional The address of the company.
     * @bodyParam phone string required The phone of the company.
     * @bodyParam logo file required The image of the company.
     * @bodyParam working_hours_day string optional The image of the company.
     * @bodyParam working_hours_night string optional The image of the company.
     * @bodyParam facebook string optional The facebook of the company.
     * @bodyParam twitter string optional The twitter of the company.
     * @bodyParam instagram string optional The instagram of the company.
     * @bodyParam about_text string optional The about text of the company.
     * @bodyParam about_image string optional The about image of the company.
     * @bodyParam locationy string optional The longitude of the company.
     * @bodyParam locationx string optional The latitude of the company.
     *
     * @response {
     *      "id": 1,
     *      "name": "Bosphorus Tech",
     *      "slug": "bosphorus-tech",
     *      "address": "Yenisehir mah. Osmanli blv. No: 5/B Arwen Ofis D: 51 Pendik/Istanbul",
     *      "phone": "2164823125",
     *      "logo": "https://via.placeholder.com/300x100",
     *      "working_hours_day": "10:00",
     *      "working_hours_night": "23:00",
     *      "facebook": "https://facebook.com/bosphorus-tech",
     *      "twitter": "https://twitter.com/bosphorustech",
     *      "instagram": "https://instagram.com/bosphorustech",
     *      "about_text": "ABOUT US",
     *      "about_image": "https://via.placeholder.com/500x300",
     *      "locationx": "40.928010",
     *      "locationy": "29.309073"
     * }
     */
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

    /**
     * Update specific company
     * @queryParam id required The id of the company.
     * @bodyParam name string required The name of the company.
     * @bodyParam address string optional The address of the company.
     * @bodyParam phone string required The phone of the company.
     * @bodyParam logo file required The image of the company.
     * @bodyParam working_hours_day string optional The image of the company.
     * @bodyParam working_hours_night string optional The image of the company.
     * @bodyParam facebook string optional The facebook of the company.
     * @bodyParam twitter string optional The twitter of the company.
     * @bodyParam instagram string optional The instagram of the company.
     * @bodyParam about_text string optional The about text of the company.
     * @bodyParam about_image string optional The about image of the company.
     * @bodyParam locationy string optional The longitude of the company.
     * @bodyParam locationx string optional The latitude of the company.
     *
     * @response {
     *      "id": 1,
     *      "name": "Bosphorus Tech",
     *      "slug": "bosphorus-tech",
     *      "address": "Yenisehir mah. Osmanli blv. No: 5/B Arwen Ofis D: 51 Pendik/Istanbul",
     *      "phone": "2164823125",
     *      "logo": "https://via.placeholder.com/300x100",
     *      "working_hours_day": "10:00",
     *      "working_hours_night": "23:00",
     *      "facebook": "https://facebook.com/bosphorus-tech",
     *      "twitter": "https://twitter.com/bosphorustech",
     *      "instagram": "https://instagram.com/bosphorustech",
     *      "about_text": "ABOUT US",
     *      "about_image": "https://via.placeholder.com/500x300",
     *      "locationx": "40.928010",
     *      "locationy": "29.309073"
     * }
     */
    public function update(Request $request, Company $company)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255|min:6',
            'phone' => 'required|max:255|min:6',
            'logo' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $company->update(
            array_merge($request->all(), [
                'slug' => str_slug($request->name)
            ])
        );
        return response()->json($company);
    }

    /**
     * Delete specific company
     *
     * @queryParam id required The id of the company.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(['status' => true]);
    }

    /**
     * Get company
     *
     * @response {
     *      "id": 1,
     *      "name": "Bosphorus Tech",
     *      "slug": "bosphorus-tech",
     *      "address": "Yenisehir mah. Osmanli blv. No: 5/B Arwen Ofis D: 51 Pendik/Istanbul",
     *      "phone": "2164823125",
     *      "logo": "https://via.placeholder.com/300x100",
     *      "working_hours_day": "10:00",
     *      "working_hours_night": "23:00",
     *      "facebook": "https://facebook.com/bosphorus-tech",
     *      "twitter": "https://twitter.com/bosphorustech",
     *      "instagram": "https://instagram.com/bosphorustech",
     *      "about_text": "ABOUT US",
     *      "about_image": "https://via.placeholder.com/500x300",
     *      "locationx": "40.928010",
     *      "locationy": "29.309073"
     * }
     */
    public function getCompany()
    {
        return response()->json(Company::first());
    }
}
