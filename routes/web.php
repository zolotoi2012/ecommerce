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
    return view('index');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/categories', function () {
    return view('/categories');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/product', function () {
    return view('product');
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

    Route::resource('products', 'Products\ProductsController');
    Route::resource('categories', 'Categories\CategoriesController');
    Route::resource('brands', 'Brands\BrandsController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
