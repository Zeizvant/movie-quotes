<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Http\Requests\Quote\UpdateQuoteRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Quote;

class QuoteController extends Controller
{
	public function show($lang = ''): View|RedirectResponse
	{
		$quote = Quote::all()->random();
		$movie = Movie::findOrFail($quote->movie_id);
		return view('landing', [
			'quote' => $quote,
			'movie' => $movie,
			'lang'  => $lang,
		]);
	}

	public function delete(): RedirectResponse
	{
		$imagePath = Quote::find(request()->quote)->thumbnail;
		Quote::destroy(request()->quote);
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
			'movie_id'  => Movie::where('name->en', '=', $request->movie)->value('id'),
		]);

		return redirect()->route('admin.quote.show');
	}

	public function create(): View
	{
		return view('add-data', [
			'data'   => 'quote',
			'movies' => Movie::all(),
			'type'   => 'add',
		]);
	}

	public function edit(Quote $quote): View
	{
		$file = File::get($quote->thumbnail);
		return view('add-data', [
			'data'   => 'quote',
			'value'  => $quote,
			'movies' => Movie::all(),
			'type'   => 'update',
		]);
	}

	public function update(Quote $quote, UpdateQuoteRequest $request): RedirectResponse
	{
		$image = $request->file('thumbnail');
		$path = $image->store('images');
		$translations = ['en' => $request->name['en'], 'ka' => $request->name['ka']];

		$data = Quote::find($quote->id);
		$data->replaceTranslations('body', $translations);
		$data->thumbnail = $path;
		$data->movie_id = Movie::where('name->en', '=', $request->movie)->value('id');
		$data->save();

		return redirect()->route('admin.quote.show');
	}
}
