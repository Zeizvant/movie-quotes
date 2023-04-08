<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use App\Models\Quote;

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
		$imagePath = Quote::find(request()->quote)->thumbnail;
		Quote::destroy(request()->quote);
		if (File::exists(ltrim($imagePath, '/'))) {
			File::delete(ltrim($imagePath, '/'));
		}
		return redirect('/admin-quotes');
	}

	public function store(StoreQuoteRequest $request): RedirectResponse
	{
		$image = $request->file('thumbnail');

		$extension = $image->getClientOriginalExtension();
		$filename = time() . '.' . $extension;
		$image->move('images', $filename);

		Quote::create([
			'body'      => $request->name,
			'thumbnail' => '/images/' . $filename,
			'movie_id'  => Movie::where('name', '=', $request->movie)->value('id'),
		]);

		return redirect('/admin-quotes');
	}

	public function create(): View
	{
		return view('add-data', [
			'data'   => 'quotes',
			'movies' => Movie::all(),
		]);
	}

	public function showList()
	{
		return view('quotes-dashboard', [
			'quotes' => Quote::all(),
		]);
	}
}
