<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\AuthController;
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

Route::controller(MovieController::class)->group(function () {
	Route::get('/movie/{movie}', 'show')->name('movie.show');
});

Route::group(['middleware' => ['auth'], 'controller' => MovieController::class], function () {
	Route::delete('/movies/{movie}', 'delete')->name('movie.delete');
	Route::get('/movies/create', 'create')->name('movie.create');
	Route::post('/movies/', 'store')->name('movie.store');
	Route::get('/movies/{movie}/edit', 'edit')->name('movie.edit');
	Route::put('/movies/{movie}', 'update')->name('movie.update');
	Route::get('/admin/movies', 'index')->name('admin.movie.show');
});

Route::controller(QuoteController::class)->group(function () {
	Route::get('/', 'show')->name('quote.show');
});

Route::group(['middleware' => ['auth'], 'controller' => QuoteController::class], function () {
	Route::delete('/quotes/{quote}', 'delete')->name('quote.delete');
	Route::get('/quotes/create', 'create')->name('quote.create');
	Route::post('/quotes/', 'store')->name('quote.store');
	Route::get('/quotes/{quote}/edit', 'edit')->name('quote.edit');
	Route::put('/quotes/{quote}', 'update')->name('quote.update');
	Route::get('/admin/quotes', 'index')->name('admin.quote.show');
});

Route::get('/change/{locale}', [LanguageController::class, 'setLocale'])->name('language.change');
