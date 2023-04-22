<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\StoreMovieRequest;
use App\Http\Requests\Movie\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function index(): View
	{
		return view('movies-dashboard', [
			'movies' => Movie::all(),
		]);
	}

	public function show(Movie $movie): View|RedirectResponse
	{
		return view('movie', [
			'quotes' => $movie->quotes,
			'movie'  => $movie,
		]);
	}

	public function delete(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return redirect()->route('admin.movie.show');
	}

	public function create(): View
	{
		return view('store-quote-movie', [
			'data' => 'movie',
			'type' => 'add',
		]);
	}

	public function store(StoreMovieRequest $request): RedirectResponse
	{
		Movie::create($request->validated());
		return redirect()->route('admin.movie.show');
	}

	public function edit(Movie $movie): View
	{
		return view('store-quote-movie', [
			'data'   => 'movie',
			'value'  => $movie,
			'type'   => 'update',
		]);
	}

	public function update(UpdateMovieRequest $request, Movie $movie): RedirectResponse
	{
		$movie->replaceTranslations('name', ['en' => $request->name['en'], 'ka' => $request->name['ka']]);
		$movie->save();

		return redirect()->route('admin.movie.show');
	}
}
