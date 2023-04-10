<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;

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

Route::get('/login', function () {
	return view('login');
})->middleware('guest')->name('login');

Route::controller(AuthController::class)->group(function () {
	Route::post('/login', 'login')->middleware('guest')->name('login');
	Route::post('/logout', 'logout')->middleware('auth')->name('logout');
});

Route::controller(AdminController::class)->group(function () {
	Route::get('/admin/quotes', 'showQuotes')->middleware('auth')->name('admin.quote.show');
	Route::get('/admin/movies', 'showMovies')->middleware('auth')->name('admin.movie.show');
});

Route::controller(MovieController::class)->group(function () {
	Route::get('/movie/{movie}', 'show')->name('movie.show');
	Route::delete('/movies/{movie}', 'delete')->middleware('auth')->name('movie.delete');
	Route::get('/movies/create', 'create')->middleware('auth')->name('movie.create');
	Route::post('/movies', 'store')->middleware('auth')->name('movie.store');
	Route::get('/movies/{movie}/edit', 'edit')->middleware('auth')->name('movie.edit');
	Route::put('/movies/{movie}', 'update')->middleware('auth')->name('movie.update');
});

Route::controller(QuoteController::class)->group(function () {
	Route::get('/', 'show')->name('quote.show');
	Route::delete('/quotes/{quote}', 'delete')->middleware('auth')->name('quote.delete');
	Route::get('/quotes/create', 'create')->middleware('auth')->name('quote.create');
	Route::post('/quotes', 'store')->middleware('auth')->name('quote.store');
	Route::get('/quotes/{quote}/edit', 'edit')->middleware('auth')->name('quote.edit');
	Route::put('/quotes/{quote}', 'update')->middleware('auth')->name('quote.update');
});

Route::get('/change/{locale}', [LanguageController::class, 'setLocale'])->name('language.change');
