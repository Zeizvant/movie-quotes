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

	public function show(Quote $quote): View|RedirectResponse
	{
		$quote = Quote::all();
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
			'body'      => [
				'en' => $request->name['en'],
				'ka' => $request->name['ka'],
			],
			'thumbnail' => $path,
			'movie_id'  => Movie::where('name->' . app()->getLocale(), '=', $request->movie_id)->value('id'),
		]);

		return redirect()->route('admin.quote.show');
	}

	public function create(Movie $movie): View
	{
		return view('add-data', [
			'data'   => 'quote',
			'movies' => $movie->all(),
			'type'   => 'add',
		]);
	}

	public function edit(Quote $quote): View
	{
		return view('add-data', [
			'data'   => 'quote',
			'value'  => $quote,
			'movies' => Movie::all(),
			'type'   => 'update',
		]);
	}

	public function update(UpdateQuoteRequest $request, Quote $quote): RedirectResponse
	{
		$image = $request->file('thumbnail');
		$path = $image->store('images');
		$translations = ['en' => $request->name['en'], 'ka' => $request->name['ka']];

		$data = Quote::find($quote->id);
		$data->replaceTranslations('body', $translations);
		$data->thumbnail = $path;
		$data->movie_id = Movie::where('name->' . app()->getLocale(), '=', $request->movie_id)->value('id');
		$data->save();

		return redirect()->route('admin.quote.show');
	}
}
