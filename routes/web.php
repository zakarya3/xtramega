<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CategController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\TypeController;


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

Route::get('/products', function () {
    return view('products');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout-details', function () {
    return view('checkout-details');
});

Route::get('/checkout-payment', function () {
    return view('checkout-payment');
});

Route::get('/checkout-complete', function () {
    return view('checkout-complete');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/brand', function () {
    return view('brand');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'Admin\FrontendController@index');

    Route::get('categories', 'Admin\CategoryController@index');
    Route::get('add-category', 'Admin\CategoryController@add');
    Route::post('insert-category', 'Admin\CategoryController@insert');
    Route::get('edit-cat/{id}', [CategoryController::class,'edit']);
    Route::put('update-category/{id}', [CategoryController::class,'update']);
    Route::get('delete-category/{id}', [CategoryController::class,'destroy']);

    Route::get('types', 'Admin\TypeController@index');
    Route::get('add-type', 'Admin\TypeController@add');
    Route::post('insert-type', 'Admin\TypeController@insert');
    Route::get('edit-type/{id}', [TypeController::class,'edit']);
    Route::put('update-type/{id}', [TypeController::class,'update']);
    Route::get('delete-type/{id}', [TypeController::class,'destroy']);

    Route::get('brands', 'Admin\BrandController@index');
    Route::get('add-brand', 'Admin\BrandController@add');
    Route::post('insert-brand', 'Admin\BrandController@insert');
    Route::get('edit-brand/{id}', [BrandController::class,'edit']);
    Route::put('update-brand/{id}', [BrandController::class,'update']);
    Route::get('delete-brand/{id}', [BrandController::class,'destroy']);


    Route::get('products-item', [ProductController::class,'index']);
    Route::get('add-product', [ProductController::class,'add']);
    Route::post('insert-product', [ProductController::class,'insert']);
    Route::get('edit-prd/{id}', [ProductController::class,'edit']);
    Route::get('delete-prd/{id}', [ProductController::class,'destroy']);
    Route::put('update-product/{id}',[ProductController::class,'update'] );
}) ;