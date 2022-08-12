<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'home'])->name('/');
Route::get('/shop-page', [HomeController::class, 'shopPage'])->name('shop-page');
Route::get('/product-details/{id}', [HomeController::class, 'productDetails'])->name('product-details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/bills', [AdminController::class, 'seeBILL'])->name('bills');
    Route::post('/createBILL', [AdminController::class, 'createBILL'])->name('createBILL');
    Route::get('/billNxtPg', [AdminController::class, 'billNxtPg'])->name('billNxtPg');

//    Product Controller
    Route::get('/add-product', [AdminController::class, 'addProduct'])->name('add-product');
    Route::get('/manage-product', [AdminController::class, 'manageProduct'])->name('manage-product');
    Route::post('/new-product', [AdminController::class, 'newProduct'])->name('new-product');
    Route::get('/update-product/{id}', [AdminController::class, 'updateProduct'])->name('update-product');
    Route::post('/new-product-info/{id}', [AdminController::class, 'updateProductInfo'])->name('new-product-info');
    Route::get('/delete-product/{id}', [AdminController::class, 'deleteProduct'])->name('delete-product');
//UserController
//    User Routes
    Route::get('/add-user', [UserController::class, 'addProduct'])->name('add-user');
    Route::get('/manage-user', [UserController::class, 'manageProduct'])->name('manage-user');
    Route::post('/new-user', [UserController::class, 'newProduct'])->name('new-user');
    Route::get('/update-user/{id}', [UserController::class, 'updateProduct'])->name('update-user');
    Route::post('/new-user-info/{id}', [UserController::class, 'updateProductInfo'])->name('new-user-info');
    Route::get('/delete-user/{id}', [UserController::class, 'deleteProduct'])->name('delete-user');
});
