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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::get('/test', [App\Http\Controllers\IndexController::class, 'test'])->name('test');

Route::post('/contact_form_process', [\App\Http\Controllers\IndexController::class, 'contactForm'])->name('contact_form_process');

Route::get('/items', [App\Http\Controllers\ItemController::class, 'index'])->name('items.index');
Route::get('/items/sort/{category}', [App\Http\Controllers\ItemController::class, 'category'])->name('items.category');
Route::get('/items/{id}', [App\Http\Controllers\ItemController::class, 'show'])->name('items.show');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/cabinet/{id}', [App\Http\Controllers\AuthController::class, 'cabinet'])->name('cabinet');
    Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
    Route::get('/checkout/{id}', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
    Route::get('/checkout_success', [App\Http\Controllers\CartController::class, 'checkoutSuccess'])->name('checkout.success');

    Route::post('/cart_store', [\App\Http\Controllers\CartController::class, 'storeInCart'])->name('cart.store');
    Route::post('/cart_delete', [\App\Http\Controllers\CartController::class, 'deleteFromCart'])->name('cart.delete');
    Route::post('/cart_update', [\App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
    Route::post('/checkout_process', [\App\Http\Controllers\CartController::class, 'checkoutProcess'])->name('checkout_process');
    Route::post('/comment', [\App\Http\Controllers\ItemController::class, 'comment'])->name('comment');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

    Route::get('/forgot', [\App\Http\Controllers\AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot_process', [\App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot_process');
});
