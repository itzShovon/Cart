<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// Custom Cart Routes
Route::get('/cart', 'CartController@products')->name('cart');
Route::get('/cart/display', 'CartController@display')->name('cart.display');
Route::get('/cart/add', 'CartController@add')->name('cart.add');
Route::get('/cart/update', 'CartController@update')->name('cart.update');
Route::get('/cart/remove', 'CartController@remove')->name('cart.remove');
Route::get('/cart/destroy', 'CartController@destroy')->name('cart.destroy');
