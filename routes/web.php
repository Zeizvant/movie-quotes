<?php

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

Route::get('/', function () {
	return view('landing');
});
Route::get('/movie', function () {
	return view('movie');
});
Route::get('/login', function () {
	return view('login');
});
Route::get('/admin-quotes', function () {
	return view('quotes-dashboard', [
		'quotes' => \App\Models\Quote::all(),
	]);
});
Route::get('/admin-movies', function () {
	return view('movies-dashboard', [
		'movies' => \App\Models\Movie::all(),
	]);
});
