<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('guest.homepage_nologin.index');
});
Route::get('/login', function () {
    return view('guest.login.index');
})->name('login');
Route::get('/register', function () {
    return view('guest.register.index');
})->name('register');
Route::get('/contact-us', function () {
    return view('guest.contact.index');
})->name('contact-us');

Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');
    Route::get('/wishlist', function () {
        return view('customer.wishlist.index');
    })->name('wishlist');
    Route::get('/shop', function () {
        return view('customer.shop.index');
    })->name('shop');
    Route::get('/item', function () {
        return view('customer.item.index');
    })->name('item');
    Route::get('/cart', function () {
        return view('customer.cart.index');
    })->name('cart');
    Route::get('/checkout', function () {
        return view('customer.checkout.index');
    })->name('checkout');
    Route::get('/blogs', function () {
        return view('customer.blog.index');
    })->name('blog');
    Route::get('/blog', function () {
        return view('customer.blog-details.index');
    })->name('blog-details');
    Route::get('/404', function () {
        return view('customer.error.index');
    })->name('404');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin-dashboard');
    Route::get('/admin/profile', function () {
        return view('admin.profile.index');
    })->name('admin-profile');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
