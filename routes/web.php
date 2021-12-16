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
|ini adalh temat untuk memanggil dari controller
| jika ada error nama function tidak ekis bertarti salah memanggil pada index yang dipanggil
*/

Route::get('/', 'LandingPageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', 'ShopController@index');

Route::get('/cart', 'CartController@index');

Route::get('/shop/detail/{id}', 'ShopController@show');

Route::get('/shop/category/{id}', 'ShopController@category');


