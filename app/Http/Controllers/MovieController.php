<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\StoreMovieRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function show(): View
	{
		$id = request()->movie;
		$movie = Movie::find($id);
		if ($movie) {
			$quotes = Quote::all()->where('movie_id', $movie->id);
		} else {
			return abort(404);
		}

		return view('movie', [
			'quotes' => $quotes,
			'movie'  => $movie,
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
		]);
	}

	public function store(StoreMovieRequest $request): RedirectResponse
	{
		Movie::create([
			'name' => $request->name,
		]);
		return redirect('/admin-movies');
	}

	public function showList(): View
	{
		return view('movies-dashboard', [
			'movies' => Movie::all(),
		]);
	}
}
