<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/admin', 'App\Http\Controllers\admin\AdminHomeController@index')->name('admin.home.index');
Route::middleware('admin')->group(function () {
    Route::get('/admin/products', 'App\Http\Controllers\admin\AdminProductController@index')->name('admin.product.index');
    Route::post('/admin/products/store', 'App\Http\Controllers\admin\AdminProductController@store')->name('admin.product.store');
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\admin\AdminProductController@delete')->name('admin.product.delete');
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\admin\AdminProductController@edit')->name('admin.product.edit');
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\admin\AdminProductController@update')->name('admin.product.update');
});

Auth::routes();

Route::get('/cart', 'App \Http \Controllers \CartController@index')->name("cart.index");
Route::get('/cart/delete', 'App \Http \Controllers \CartController@delete')->name("cart.delete");
Route::post('/cart/add/{id}', 'App \Http \Controllers \CartController@add')->name("cart.add");
