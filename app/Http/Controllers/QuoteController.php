<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Http\Requests\Quote\UpdateQuoteRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Quote;

class QuoteController extends Controller
{
	public function index(): View
	{
		return view('quotes-dashboard', [
			'quotes' => Quote::all(),
		]);
	}

	public function show(): View|RedirectResponse
	{
		$quote = Quote::all()->isNotEmpty() ? Quote::all()->random()->load('movie') : null;
		return view('landing', [
			'quote' => $quote,
		]);
	}

	public function delete(Quote $quote): RedirectResponse
	{
		$imagePath = $quote->thumbnail;
		$quote->delete();
		Storage::delete($imagePath);
		return redirect()->route('admin.quote.show');
	}

	public function store(StoreQuoteRequest $request): RedirectResponse
	{
		$image = $request->file('thumbnail');
		$path = $image->store('images');
		Quote::create([
			'body'      => $request->body,
			'thumbnail' => $path,
			'movie_id'  => $request->movie_id,
		]);

		return redirect()->route('admin.quote.show');
	}

	public function create(Movie $movie): View
	{
		return view('store-quote-movie', [
			'data'   => 'quote',
			'movies' => $movie->all(),
			'type'   => 'add',
		]);
	}

	public function edit(Quote $quote): View
	{
		return view('store-quote-movie', [
			'data'   => 'quote',
			'value'  => $quote,
			'movies' => Movie::all(),
			'type'   => 'update',
		]);
	}

	public function update(UpdateQuoteRequest $request, Quote $quote): RedirectResponse
	{
		$image = $request->file('thumbnail');
		$imagePath = $quote->thumbnail;
		Storage::delete($imagePath);
		$path = $image->store('images');
		$quote->replaceTranslations('body', ['en' => $request->name['en'], 'ka' => $request->name['ka']]);
		$quote->thumbnail = $path;
		$quote->movie_id = $request->movie_id;
		$quote->save();
		return redirect()->route('admin.quote.show');
	}
}
