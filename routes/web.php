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

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/city/{cityId}', [App\Http\Controllers\NewsController::class, 'cityNews']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/news/{newsID}',[App\Http\Controllers\SingleNewsController::class, 'index']);


Route::post('/addFavorite', [App\Http\Controllers\FavoriteController::class, 'add']);
Route::post('/removeFavorite', [App\Http\Controllers\FavoriteController::class, 'remove']);


