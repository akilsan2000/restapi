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
// https://www.itsolutionstuff.com/post/laravel-6-rest-api-with-passport-tutorialexample.html

Route::post('register', 'API\RegisterController@register')->name('register');
Route::post('login', 'API\RegisterController@login')->name('login');
// Header: Accept application/json !!!!
// Header Authorization Bearer token !!!!
// GET: http://localhost:8000/api/products/5

Route::middleware('auth:api')->group( function () {
    Route::get('products', 'API\ProductController@index');
    Route::get('products/{id}', 'API\ProductController@show');
    Route::post('products', 'API\ProductController@store');
    Route::put('products/{id}', 'API\ProductController@update');
    Route::delete('products/{id}', 'API\ProductController@destroy');

    Route::get('categories', 'API\CategoryController@index');
    Route::get('categories/{id}', 'API\CategoryController@show');
    Route::post('categories', 'API\CategoryController@store');
    Route::put('categories/{id}', 'API\CategoryController@update');
    Route::delete('categories/{id}', 'API\CategoryController@destroy');

    Route::get('producers', 'API\ProducerController@index');
    Route::get('producers/{id}', 'API\ProducerController@show');
    Route::post('producers', 'API\ProducerController@store');
    Route::put('producers/{id}', 'API\ProducerController@update');
    Route::delete('producers/{id}', 'API\ProducerController@destroy');

    Route::get('customers', 'API\CustomerController@index');
    Route::get('customers/{id}', 'API\CustomerController@show');
    Route::post('customers', 'API\CustomerController@store');
    Route::put('customers/{id}', 'API\CustomerController@update');
    Route::delete('customers/{id}', 'API\CustomerController@destroy');

    Route::get('addresses', 'API\AddressController@index');
    Route::get('addresses/{id}', 'API\AddressController@show');
    Route::post('addresses', 'API\AddressController@store');
    Route::put('addresses/{id}', 'API\AddressController@update');
    Route::delete('addresses/{id}', 'API\AddressController@destroy');

    Route::get('cartitems', 'API\CartitemController@index');
    Route::get('cartitems/{id}', 'API\CartitemController@show');
    Route::post('cartitems', 'API\CartitemController@store');
    Route::put('cartitems/{id}', 'API\CartitemController@update');
    Route::delete('cartitems/{id}', 'API\CartitemController@destroy');
});