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
