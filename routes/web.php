<?php
Route::get('/shoplist', 'PageController@shoplist');

Route::get('/shopping-cart', 'PageController@shoppingcart');
Route::get('/viewcart','PageController@viewcart')->name('muahang');
Route::post('/addToCart','PageController@addToCart')->name('addToCart');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','Auth\LoginController@logout')->name('test');
Route::group(['prefix' => '/admin', 'middleware' => 'checkRole'], function ()
{
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('categories', 'Admin\CategoryController');
    Route::resource('brands', 'Admin\BrandController');
    Route::resource('products', 'Admin\ProductController');
});
Route::get('/home1', 'PageController@home1')->name('trangchu');
Route::get('/sanphamchitiet/{id}', 'PageController@detail')->name('sanphamchitiet');
Route::get('/showsanpham/{id}', 'PageController@showcate')->name('showcate');
Route::get('/deletecart/{id}', 'PageController@delete')->name('deletecart');
Route::name('search')->get('/search', 'PageController@search');
Route::post('/order', 'PageController@postorder')->name('order');
Route::get('/{slug}', 'PageController@showDetailPost');
