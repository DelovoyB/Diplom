<?php

use App\Http\Controllers\IndexController;
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

Route::middleware('guest:admin')->group(function (){

    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login');
    Route::post('login_process', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login_process');

});

Route::middleware('auth:admin')->group(function (){

    Route::resource('items', \App\Http\Controllers\Admin\ItemController::class);
    Route::get('items/{column}/{direction}', [\App\Http\Controllers\Admin\SortController::class, 'items_sort'])->name('items.sort');
    Route::resource('images', \App\Http\Controllers\Admin\ImageController::class);
    Route::get('images/{column}/{direction}', [\App\Http\Controllers\Admin\SortController::class, 'images_sort'])->name('images.sort');
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::get('users/{column}/{direction}', [\App\Http\Controllers\Admin\SortController::class, 'users_sort'])->name('users.sort');
    Route::resource('admin_users', \App\Http\Controllers\Admin\AdminUserController::class);
    Route::get('admin_users/{column}/{direction}', [\App\Http\Controllers\Admin\SortController::class, 'admin_users_sort'])->name('admin_users.sort');
    Route::resource('comments', \App\Http\Controllers\Admin\CommentController::class);
    Route::get('comments/{column}/{direction}', [\App\Http\Controllers\Admin\SortController::class, 'comments_sort'])->name('comments.sort');
    Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
    Route::get('orders/{column}/{direction}', [\App\Http\Controllers\Admin\SortController::class, 'orders_sort'])->name('orders.sort');
    Route::resource('ordered_items', \App\Http\Controllers\Admin\OrderedItemController::class);
    Route::get('ordered_items/{column}/{direction}', [\App\Http\Controllers\Admin\SortController::class, 'ordered_items_sort'])->name('ordered_items.sort');
    Route::get('logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

});


