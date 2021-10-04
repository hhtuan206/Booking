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

Route::get('/','Client\HomeController@index')->name('index');

Route::get('/shop','Client\ShopController@index')->name('shop.index');

Route::get('/product/{id}','Client\ShopController@show')->name('shop.show');

Route::get('/shop/{category}','Client\ShopController@category')->name('shop.category');
Route::get('/add-to-cart/{id}/{qty}','Client\CartController@addCart')->name('cart.addCart');

Route::get('/cart','Client\CartController@index')->name('cart.index');

Route::get('/destroy-cart','Client\CartController@destroyCart')->name('cart.destroy');

Route::post('/updateQty','Client\CartController@updateQty')->name('cart.update');

Route::get('/remove-cart/{id}','Client\CartController@removeProduct')->name('cart.remove');

Route::get('/checkout','Client\CartController@checkout')->name('cart.checkout')
->middleware('auth');

Route::get('/about','Client\AboutController@index')->name('about');

Route::get('/blog','Client\BlogController@index')->name('blog');

Route::get('/testimonials','Client\EtcController@testimonials')->name('testimonials');

Route::get('/terms','Client\AboutController@terms')->name('terms');

Route::get('/contact','Client\ContactController@index')->name('contact');

Route::get('/blog-post/{id}','Client\BlogController@show')->name('blog.show');

Route::get('/site','Client\SiteController@index')->name('site.index');

Route::get('/profile','Client\UserController@index')->name('profile.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');