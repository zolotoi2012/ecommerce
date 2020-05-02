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
    return view('about', ['title' => 'About']);
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/category', function () {
    return view('/category');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/simple_product', function () {
    return view('simple_product');
});

Route::get('/products', function () {
   return view('products_list');
});

Route::get('/about', function () {
    return view('about');
});

Route::middleware('auth')->prefix('/admin')->group(function () {
    Route::get('/', function () {
       return view('admin/index');
    });

    Route::get('/products', function () {
       return view('admin/products');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
