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
Route::get('/contacts', 'App\Http\Controllers\HomeController@contacts')->name('home.contacts');
Route::get('/collaboration', 'App\Http\Controllers\HomeController@collaboration')->name('home.collaboration');
Route::get('/product-detail/{uuid}', 'App\Http\Controllers\HomeController@productDetail')->name('home.product-detail');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/catalogs', 'App\Http\Controllers\CatalogController@index')->name('catalog.index');
Route::get('/cat-products/{uuid}', 'App\Http\Controllers\HomeController@catalogProducts')->name('catalog.products');

Route::match(['get','post'], '/filter', 'ProductController@filter')->name('product.filter');

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
