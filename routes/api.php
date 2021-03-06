<?php

Route::get('companies', 'CompanyController@index');
Route::get('companies/{company}', 'CompanyController@show');
Route::post('companies', 'CompanyController@store');
Route::post('companies/{company}', 'CompanyController@update');
Route::post('companies/{company}/destroy', 'CompanyController@destroy');
Route::get('getCompany', 'CompanyController@getCompany');

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::post('users/{user}', 'UserController@update');
Route::post('users/{user}/destroy', 'UserController@destroy');
Route::get('users/{user}/favourites', 'UserController@favourites');
Route::get('users/{user}/contacts', 'UserController@contacts');
Route::get('users/{user}/comments', 'UserController@comments');
Route::get('users/{user}/orders', 'UserController@orders');
Route::get('users/{user}/reservations', 'UserController@reservations');
Route::post('resetPass', 'UserController@sendEmail');

Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::post('products/{product}', 'ProductController@update');
Route::post('products/{product}/destroy', 'ProductController@destroy');
Route::get('products/{product}/comments', 'ProductController@getComments');
Route::get('getProductsByCategory/{category}', 'ProductController@getProductsByCategory');
Route::get('getFavouriteProductsByCategory/{category}', 'ProductController@getFeaturedProductsByCategory');

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

Route::get('baskets', 'BasketController@index');
Route::get('baskets/{basket}', 'BasketController@show');
Route::post('baskets', 'BasketController@store');
Route::post('baskets/{basket}', 'BasketController@update');
Route::post('baskets/{basket}/destroy', 'BasketController@destroy');

Route::get('comments', 'CommentController@index');
Route::get('comments/{comment}', 'CommentController@show');
Route::post('comments', 'CommentController@store');
Route::post('comments/{comment}', 'CommentController@update');
Route::post('comments/{comment}/destroy', 'CommentController@destroy');
Route::get('getReviews', 'CommentController@getReviews');

Route::get('employees', 'EmployeeController@index');
Route::get('employees/{employee}', 'EmployeeController@show');
Route::post('employees', 'EmployeeController@store');
Route::post('employees/{employee}', 'EmployeeController@update');
Route::post('employees/{employee}/destroy', 'EmployeeController@destroy');

Route::get('favourites', 'FavouriteController@index')->name('indexFavourites');
Route::get('favourites/{favourite}', 'FavouriteController@show')->name('showFavourite');
Route::post('favourites', 'FavouriteController@store');
Route::post('favourites/{favourite}', 'FavouriteController@update')->name('updateFavourite');
Route::post('favourites/{product}/{user}/destroy', 'FavouriteController@destroy');

Route::get('messages', 'MessageController@index');
Route::get('messages/{message}', 'MessageController@show');
Route::post('messages', 'MessageController@store');
Route::post('messages/{message}', 'MessageController@update');
Route::post('messages/{message}/destroy', 'MessageController@destroy');

Route::get('orders', 'OrderController@index');
Route::get('orders/approved', 'OrderController@approved');
Route::get('orders/waiting', 'OrderController@waiting');
Route::get('orders/sent', 'OrderController@sent');
Route::get('orders/canceled', 'OrderController@canceled');
Route::get('lastOrders', 'OrderController@lastOrders');
Route::get('orders/{order}', 'OrderController@show');
Route::post('orders', 'OrderController@store');
Route::post('orders/{order}', 'OrderController@update');
Route::post('orders/{order}/updated', 'OrderController@orderUpdated');
Route::post('orders/{order}/destroy', 'OrderController@destroy');

Route::get('reservations', 'ReservationController@index');
Route::get('lastReservations', 'ReservationController@lastReservations');
Route::get('reservations/{reservation}', 'ReservationController@show');
Route::post('reservations', 'ReservationController@store');
Route::post('reservations/{reservation}', 'ReservationController@update');
Route::post('reservations/{reservation}/updated', 'ReservationController@reservationUpdated');
Route::post('reservations/{reservation}/destroy', 'ReservationController@destroy');

Route::get('paymentTypes', 'PaymentTypeController@index');
Route::get('paymentTypes/{paymentType}', 'PaymentTypeController@show');
Route::post('paymentTypes', 'PaymentTypeController@store');
Route::post('paymentTypes/{paymentType}', 'PaymentTypeController@update');
Route::post('paymentTypes/{paymentType}/destroy', 'PaymentTypeController@destroy');

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('getUser', 'UserController@getUser');
});
