<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\StoreMovieRequest;
use App\Http\Requests\Movie\UpdateMovieRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function show(): View|RedirectResponse
	{
		if (request()->lang != '' and request()->lang != 'ka') {
			return redirect()->route('movie.show');
		}
		$id = request()->movie;
		$movie = Movie::findOrFail($id);
		$quotes = Quote::all()->where('movie_id', $movie->id);

		return view('movie', [
			'quotes' => $quotes,
			'movie'  => $movie,
			'lang'   => request()->lang,
		]);
	}

	public function delete(): RedirectResponse
	{
		Movie::destroy(request()->movie);
		return redirect('/admin-movies');
	}

	public function create(): View
	{
		return view('add-data', [
			'data' => 'movies',
			'type' => 'add',
		]);
	}

	public function store(StoreMovieRequest $request): RedirectResponse
	{
		Movie::create([
			'name' => [
				'en' => $request->name['en'],
				'ka' => $request->name['ka'],
			],
		]);
		return redirect('/admin-movies');
	}

	public function showList(): View
	{
		return view('movies-dashboard', [
			'movies' => Movie::all(),
		]);
	}

	public function edit(Movie $movie): View
	{
		return view('add-data', [
			'data'   => 'movies',
			'value'  => $movie,
			'type'   => 'update',
		]);
	}

	public function update(Movie $movie, UpdateMovieRequest $request): RedirectResponse
	{
		$translations = ['en' => $request->name['en'], 'ka' => $request->name['ka']];
		$data = Movie::find($movie->id);
		$data->replaceTranslations('name', $translations);
		$data->save();

		return redirect('/admin-movies');
	}
}
