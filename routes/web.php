<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
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


// ######### COMICS ROUTE #########
Route::controller(ComicController::class)->prefix('/comics')->name('comics.')->group(function () {

    // List Route
    Route::get('/index', 'index')->name('index');

    // Create Route
    Route::get('/create', 'create')->name('create');

    // Details Route
    Route::get('/{comic}', 'show')->name('show');

    // Update Route
    Route::get('/{comic}/edit', 'edit')->name('edit');

    // Trash Route 
    Route::get('/trash', 'trash')->name('trash');

    // Store Route
    Route::post('/comics', 'store')->name('store');

    // Put Route 
    Route::put('/{comic}/update', 'update')->name('update');

    // Delete Single Route 
    Route::delete('/destroy', 'destroy')->name('destroy');

    // Delete All Route 
    Route::delete('/{comic}/destroy', 'destroy')->name('destroy');
});
