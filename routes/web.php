<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;

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

Route::get('/home', function () 
{
    return view('home');
})->name('home'); 
// ->name('home') co nghia la dat duong dan /home co ten la home

Route::get('/product', function () {
    return view('product');
});

Route::get('/sitemap', function () {
    return view('sitemap');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/galery', function () {
    return view('galery');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

route::resource('users', UserController::class);
route::resource('categories', CategoryController::class);
route::resource('products', ProductController::class);
route::resource('orders', OrderController::class);
route::resource('orderitems', OrderItemController::class);
