<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('companies', 'CompanyController@index');
Route::get('companies/{company}', 'CompanyController@show');
Route::post('companies', 'CompanyController@store');
Route::post('companies/{company}', 'CompanyController@update');
Route::post('companies/{company}/destroy', 'CompanyController@destroy');

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::post('users/{user}', 'UserController@update');
Route::post('users/{user}/destroy', 'UserController@destroy');
Route::get('users/{user}/favourites', 'UserController@favourites');
Route::get('users/{user}/contacts', 'UserController@contacts');

Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::post('products/{product}', 'ProductController@update');
Route::post('products/{product}/destroy', 'ProductController@destroy');
Route::post('getProductsByCategory/{category}', 'ProductController@getProductsByCategory');

Route::get('campaigns', 'CampaignController@index');
Route::get('campaigns/{campaign}', 'CampaignController@show');
Route::post('campaigns', 'CampaignController@store');
Route::post('campaigns/{campaign}', 'CampaignController@update');
Route::post('campaigns/{campaign}/destroy', 'CampaignController@destroy');

Route::get('categories', 'CategoryController@index');
Route::get('categories/{category}', 'CategoryController@show');
Route::post('categories', 'CategoryController@store');
Route::post('categories/{category}', 'CategoryController@update');
Route::post('categories/{category}/destroy', 'CategoryController@destroy');

Route::get('userContacts', 'UserContactController@index');
Route::get('userContacts/{userContact}', 'UserContactController@show');
Route::post('userContacts', 'UserContactController@store');
Route::post('userContacts/{userContact}', 'UserContactController@update');
Route::post('userContacts/{userContact}/destroy', 'UserContactController@destroy');
