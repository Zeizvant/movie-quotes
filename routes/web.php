<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;

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
});

Route::controller(MovieController::class)->group(function () {
	Route::get('/movie/{movie}', 'show');
	Route::delete('/movies/{movie}', 'delete');
	Route::get('/movies/create', 'create');
	Route::post('/movies', 'store');
	Route::get('/admin-movies', 'showList');
	Route::get('/movies/{movie}/edit', 'edit');
	Route::put('/movies/{movie}', 'update');
});

Route::controller(QuoteController::class)->group(function () {
	Route::get('/', 'show');
	Route::delete('/quotes/{quote}', 'delete');
	Route::get('/quotes/create', 'create');
	Route::get('/admin-quotes', 'showList');
	Route::post('/quotes', 'store');
});
