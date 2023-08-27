<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\RouteGroup;
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

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');


// ######### PRODUCTS ROUTE #########

Route::controller(ProductController::class)->prefix('/comics')->name('comics.')->group(function () {

    // List route
    Route::get('/list', 'index')->name('index');

    // Details route
    Route::get('/detail', 'show')->name('show');

    // Create route
    Route::get('/create', 'create')->name('create');
});
