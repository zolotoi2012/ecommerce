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

Route::get('/', 'HomeController@index');
Route::get('/register-user', function () {
   return view('register');
});

Route::get('/login-user', function () {
   return view('login');
});

Route::prefix('/cart')->group(function () {
    Route::get('/', 'CartController@show');
    Route::get('/clear', 'CartController@clear')->name('clear');
    Route::post('add-to-cart/{product}', 'CartController@addToCart')->name('addToCart');
});

Route::prefix('/brands')->group(function () {
    Route::get('/', 'BrandsController@index');
    Route::get('/{brand}', 'BrandsController@show')->name('brand');
});

Route::prefix('/categories')->group(function () {
    Route::get('/', 'CategoriesController@index');
    Route::get('/show/{category}', 'CategoriesController@show')->name('category');
});


Route::get('/checkout', function () {
    return view('checkout', ['categories' => \App\Category::all()]);
});

Route::prefix('/product')->group(function () {
    Route::get('/', function () {
        return view('product', ['categories' => \App\Category::all()]);
    });
    Route::get('/{product}', 'ProductsController@show')->name('product');
});


Route::get('/contact', function () {
    return view('contact', ['categories' => \App\Category::all()]);
});

Route::middleware('auth')->prefix('/admin')->group(function () {
    Route::get('/', function () {
       return view('admin/index');
    });

    Route::resource('products', 'Admin\ProductsController');
    Route::resource('categories', 'Admin\CategoriesController');
    Route::resource('brands', 'Admin\BrandsController');
    Route::resource('images', 'Admin\ImagesController');
    Route::get('solds', 'Admin\SoldsController@index');
});
Auth::routes();