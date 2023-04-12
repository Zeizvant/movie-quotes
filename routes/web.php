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
	Route::post('/login', 'login')->middleware('guest')->name('auth.login');
	Route::post('/logout', 'logout')->middleware('auth')->name('auth.logout');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'controller' => AdminController::class], function () {
	Route::get('quotes', 'showQuotes')->name('admin.quote.show');
	Route::get('movies', 'showMovies')->name('admin.movie.show');
});

Route::controller(MovieController::class)->group(function () {
	Route::get('/movie/{movie}', 'show')->name('movie.show');
});

Route::group(['prefix' => 'movies', 'middleware' => ['auth'], 'controller' => MovieController::class], function () {
	Route::delete('{movie}', 'delete')->name('movie.delete');
	Route::get('create', 'create')->name('movie.create');
	Route::post('/', 'store')->name('movie.store');
	Route::get('{movie}/edit', 'edit')->name('movie.edit');
	Route::put('{movie}', 'update')->name('movie.update');
});

Route::controller(QuoteController::class)->group(function () {
	Route::get('/', 'show')->name('quote.show');
	//	Route::delete('/quotes/{quote}', 'delete')->middleware('auth')->name('quote.delete');
	//	Route::get('/quotes/create', 'create')->middleware('auth')->name('quote.create');
	//	Route::post('/quotes', 'store')->middleware('auth')->name('quote.store');
	//	Route::get('/quotes/{quote}/edit', 'edit')->middleware('auth')->name('quote.edit');
	//	Route::put('/quotes/{quote}', 'update')->middleware('auth')->name('quote.update');
});

Route::group(['prefix' => 'quotes', 'middleware' => ['auth'], 'controller' => QuoteController::class], function () {
	Route::delete('{quote}', 'delete')->name('quote.delete');
	Route::get('create', 'create')->name('quote.create');
	Route::post('/', 'store')->name('quote.store');
	Route::get('{quote}/edit', 'edit')->name('quote.edit');
	Route::put('{quote}', 'update')->name('quote.update');
});

Route::get('/change/{locale}', [LanguageController::class, 'setLocale'])->name('language.change');
