<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminPanelController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('user', function(){
//    return 'User';
//});

Route::get('admin', function(){
    return 'Admin';
});

Route::get('user', [UserController::class, 'atlogin'])->name('user');
Route::get('admin', [AdminController::class, 'index'])->name('admin');

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Route::get('/ContactUs', [App\Http\Controllers\ContactUsController::class, 'index']);
Route::get('/AboutUs', [App\Http\Controllers\AboutUsController::class, 'index']);


Route::get('/add-to-cart/{product}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add')->middleware('auth');
Route::get('/cart/destroy/{itemId}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index')->middleware('auth');
Route::get('/cart/update/{itemId}', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update')->middleware('auth');
Route::get('/cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cart.checkout')->middleware('auth');
//Route::get('/ProductList', [App\Http\Controllers\ProductListController::class, 'index'])->name('ProductList.Index')->name('admin');
//Route::get('/ProductList/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy')->middleware('Auth');
Route::get('/userorders', [App\Http\Controllers\UserOrders::class, 'Index'])->name('userorders.index')->middleware('auth');

Route::resource('orders', OrderController::class);
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/adminpanel', function () {
        return view('admin.adminpanel');
    });
    //Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
    //Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
    //Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index']);
    Route::get('/AdminPanel', [App\Http\Controllers\AdminPanelController::class, 'index']);
   // Route::resource('orders', OrderController::class);
   // Route::resource('users', UserController::class);
   // Route::resource('products', ProductController::class);

});
//Route::resource('orders', 'App\Http\Controllers\OrderController')->middleware('auth');


