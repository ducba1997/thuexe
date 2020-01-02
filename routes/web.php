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
Route::get('/', function () {
    return view('home');
});
Route::get('/product/{id}','ProductController@index');
Route::get('/about', function (){
	return view('about');
});	
Route::get('/introduce', function (){
	return view('intro');
});
Route::get('/cart/{id}','CartController@addToCart');
Route::get('/cart/del/{id}','CartController@deleteItemCart');
Route::get('/delAll/','CartController@deleteAllItem');
Route::get('/carts', function (){
	return view('cart');
});
Route::get('checkouts','CartController@checkout');
Route::get('/checkout', function (){
	return view('checkout');
});
