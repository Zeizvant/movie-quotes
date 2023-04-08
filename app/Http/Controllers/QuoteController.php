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
		Storage::delete($imagePath);
		return redirect('/admin-quotes');
	}

	public function store(StoreQuoteRequest $request): RedirectResponse
	{
		$image = $request->file('thumbnail');
		$path = $image->store('images');

		Quote::create([
			'body'      => $request->name,
			'thumbnail' => $path,
			'movie_id'  => Movie::where('name', '=', $request->movie)->value('id'),
		]);

		return redirect('/admin-quotes');
	}

	public function create(): View
	{
		return view('add-data', [
			'data'   => 'quotes',
			'movies' => Movie::all(),
			'type'   => 'add',
		]);
	}

	public function showList()
	{
		return view('quotes-dashboard', [
			'quotes' => Quote::all(),
		]);
	}

	public function edit(Quote $quote): View
	{
		$file = File::get($quote->thumbnail);
		return view('add-data', [
			'data'   => 'quotes',
			'value'  => $quote,
			'movies' => Movie::all(),
			'type'   => 'update',
		]);
	}

	public function update(Quote $quote, UpdateQuoteRequest $request): RedirectResponse
	{
		$image = $request->file('thumbnail');
		$path = $image->store('images');

		$data = Quote::find($quote->id);
		$data->body = $request->name;
		$data->thumbnail = $path;
		$data->movie_id = Movie::where('name', '=', $request->movie)->value('id');
		$data->save();

		return redirect('admin-quotes');
	}
}
