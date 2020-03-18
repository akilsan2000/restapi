<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/products', 'ProductController@get');
Route::post('/v1/products', 'ProductController@post');
Route::put('/v1/products', 'ProductController@put');
Route::patch('/v1/products', 'ProductController@patch');
Route::delete('/v1/products', 'ProductController@delete');

Route::get('/v1/categories', 'CategorieController@get');
Route::post('/v1/categories', 'CategorieController@post');
Route::put('/v1/categories', 'CategorieController@put');
Route::patch('/v1/categories', 'CategorieController@patch');
Route::delete('/v1/categories', 'CategorieController@delete');

Route::get('/v1/producers', 'ProducerController@get');
Route::post('/v1/producers', 'ProducerController@post');
Route::put('/v1/producers', 'ProducerController@put');
Route::patch('/v1/producers', 'ProducerController@patch');
Route::delete('/v1/producers', 'ProducerController@delete');

Route::get('/v1/customers', 'CustomerController@get');
Route::post('/v1/customers', 'CustomerController@post');
Route::put('/v1/customers', 'CustomerController@put');
Route::patch('/v1/customers', 'CustomerController@patch');
Route::delete('/v1/customers', 'CustomerController@delete');

Route::get('/v1/addresses', 'AddressController@get');
Route::post('/v1/addresses', 'AddressController@post');
Route::put('/v1/addresses', 'AddressController@put');
Route::patch('/v1/addresses', 'AddressController@patch');
Route::delete('/v1/addresses', 'AddressController@delete');

Route::get('/v1/cartitems', 'CartitemController@get');
Route::post('/v1/cartitems', 'CartitemController@post');
Route::put('/v1/cartitems', 'CartitemController@put');
Route::patch('/v1/cartitems', 'CartitemController@patch');
Route::delete('/v1/cartitems', 'CartitemController@delete');
