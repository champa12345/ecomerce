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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'PageController@getIndex')->name('trangchu');
Route::get('/categorytype', 'PageController@categorytype')->name('loaisanpham');
Route::get('/detailproduct', 'PageController@detailproduct')->name('chitietsanpham');
Route::get('/contact', 'PageController@contact')->name('lienhe');
Route::get('/login', 'PageController@login')->name('dangnhap');
Route::get('/register', 'PageController@register')->name('dangky');
Route::get('/about', 'PageController@about')->name('taikhoan');
Route::get('/checkout','PageController@checkout')->name('dathang');
Route::get('/addToCart', 'PageController@addToCart')->name('addToCart');

