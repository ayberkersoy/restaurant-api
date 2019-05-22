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
    Route::get('/payments', 'HomeController@payments');

    Route::get('/campaigns', 'CampaignController@indexView');
    Route::get('/campaigns/create', 'CampaignController@createView');
    Route::get('/campaigns/{id}/edit', 'CampaignController@editView');

    Route::get('/categories', 'CategoryController@indexView');
    Route::get('/categories/create', 'CategoryController@createView');
    Route::get('/categories/{id}/edit', 'CategoryController@editView');

    Route::get('/comments', 'CommentController@indexView');
    Route::get('/comments/create', 'CommentController@createView');
    Route::get('/comments/{id}/edit', 'CommentController@editView');

    Route::get('/employees', 'EmployeeController@indexView');
    Route::get('/employees/create', 'EmployeeController@createView');
    Route::get('/employees/{id}/edit', 'EmployeeController@editView');

    Route::get('/messages', 'MessageController@indexView');
    Route::get('/messages/{id}/edit', 'MessageController@editView');

    Route::get('/orders', 'OrderController@indexView');
    Route::get('/orders/create', 'OrderController@createView');
    Route::get('/orders/{id}/show', 'OrderController@editView');

    Route::get('/paymentTypes', 'PaymentTypeController@indexView');
    Route::get('/paymentTypes/create', 'PaymentTypeController@createView');
    Route::get('/paymentTypes/{id}/edit', 'PaymentTypeController@editView');

    Route::get('/products', 'ProductController@indexView');
    Route::get('/products/create', 'ProductController@createView');
    Route::get('/products/{id}/edit', 'ProductController@editView');

    Route::get('/reservations', 'ReservationController@indexView');
    Route::get('/reservations/{id}/edit', 'ReservationController@editView');

    Route::get('/users', 'UserController@indexView');
    Route::get('/users/create', 'UserController@createView');
    Route::get('/users/{id}/edit', 'UserController@editView');

    Route::get('settings', 'HomeController@settingsView');
});