<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductEnter;
use App\Http\Controllers\ProductsExit;
use App\Http\Controllers\ProductsIn;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::resource('/user', UserController::class);
Route::get('/apiUser', 'UserController@apiUsers')->name('api.users');

Route::resource('/productsIn', ProductEnter::class);

Route::resource('/categories', CategoryController::class);
Route::get('/apiCategories', 'CategoryController@apiCategories')->name('api.categories');
Route::get('/exportCategoriesAll', 'CategoryController@exportCategoriesAll')->name('exportPDF.categoriesAll');
Route::get('/exportCategoriesAllExcel', 'CategoryController@exportExcel')->name('exportExcel.categoriesAll');

Route::resource('/customers', CustomerController::class);

Route::resource('/sales', SaleController::class);

Route::resource('/suppliers', SupplierController::class);

Route::resource('/products', ProductController::class);

Route::resource('/productsOut', ProductsExit::class);

Route::resource('/productsIn', ProductsIn::class);

require __DIR__ . '/auth.php';
