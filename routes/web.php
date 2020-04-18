<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//home
Route::resource("/", "CoffeeHomeController");

//about
Route::resource("/About", "AboutController");

//products
Route::resource("/Products", "ProductsController");

//store
Route::resource("/Store", "StoreController");

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
