<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/campaigns', 'CampaignController@indexView');
    Route::get('/campaigns/create', 'CampaignController@createView');
    Route::get('/campaigns/{id}/edit', 'CampaignController@editView');


    Route::get('/categories', 'CategoryController@indexView');
    Route::get('/comments', 'CommentController@indexView');
    Route::get('/employees', 'EmployeeController@indexView');
    Route::get('/messages', 'MessageController@indexView');
    Route::get('/orders', 'OrderController@indexView');
    Route::get('/paymentTypes', 'PaymentTypeController@indexView');
    Route::get('/products', 'ProductController@indexView');
    Route::get('/reservations', 'ReservationController@indexView');
    Route::get('/users', 'UserController@indexView');
});