<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Quote;
use App\Models\Movie;

class QuoteController extends Controller
{
	public function show(): View
	{
		$id = rand(1, sizeOf(Quote::all()));
		$quote = Quote::find($id);
		if ($quote) {
			$movie = Movie::find($quote->movie_id);
		} else {
			$movie = '';
		}
		return view('landing', [
			'quote' => $quote,
			'movie' => $movie,
		]);
	}

	public function delete(): RedirectResponse
	{
		Quote::destroy(request()->quote);
		return redirect('/admin-quotes');
	}

	public function create()
	{
		return 'create';
	}

	public function showList()
	{
		return view('quotes-dashboard', [
			'quotes' => Quote::all(),
		]);
	}
}
