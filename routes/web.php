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

Route::get('/', 'ShopController@index');
Route::get('/{idProduct}/add-to-cart', 'CartController@addToCart')->name('add-to-cart');

Route::prefix('cart')->group(function (){
    Route::get('/','CartController@index')->name('cart.index');
});
