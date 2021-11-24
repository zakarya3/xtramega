<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FilterController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [FrontController::class,'index']);

Route::get('/products/{name}', [FrontController::class,'products']);
Route::get('/products/{name}/{typeName}', [FrontController::class,'type']);
Route::get('/products/order-by-brand/{name}/{id_brand}', [FilterController::class,'brand_filter']);

Route::get('/product/{type}/{name}', [FrontController::class,'product']);

Route::get('/brand', [FrontController::class, 'brand']);

Route::get('/contact', [FrontController::class, 'contact']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::post('add-to-cart', [CartController::class, 'addProduct']);
    Route::get('cart', [CartController::class, 'viewcart']);
    Route::post('delete-cart-item', [CartController::class, 'deleteProduct']);
    Route::get('checkout', [CheckoutController::class, 'index']);
    Route::post('place-order', [CheckoutController::class, 'placeorder']);
    Route::get('checkout-payment', [CheckoutController::class, 'index_pay']);
    Route::get('checkout-complete', [CheckoutController::class, 'index_comp']);
    Route::get('myorders', [UserController::class, 'index']);
    Route::get('view-order/{id}', [UserController::class, 'view']);
    Route::get('send', [HomeController::class,"sendnotification"]);
    Route::put('payment-method/{id}', [CheckoutController::class, 'paymentmethod']);
});



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

    Route::get('orders', [OrderController::class, 'index']);
    Route::get('admin/view-order/{id}', [OrderController::class, 'view']);
    Route::put('update-order/{id}', [OrderController::class, 'updateorder']);
    Route::get('order-history', [OrderController::class, 'orderhistory']);
    Route::get('users', [DashboardController::class, 'users']);
    Route::get('view-users/{id}', [DashboardController::class, 'viewusers']);
}) ;