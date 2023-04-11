<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;

class AdminController extends Controller
{
	public function showQuotes(): View
	{
		return view('quotes-dashboard', [
			'quotes' => Quote::all(),
		]);
	}

	public function showMovies(): View
	{
		return view('movies-dashboard', [
			'movies' => Movie::all(),
		]);
	}
}
