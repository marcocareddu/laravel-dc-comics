<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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


// ######### PRODUCT ROUTE #########
// List route
Route::get('/comics.list', [ProductController::class, 'index'])->name('comics.list');

// Details route
Route::get('/comics.show', [ProductController::class, 'show'])->name('comics.details');

// Create route
Route::get('/comics.create', [ProductController::class, 'create'])->name('comics.create');
