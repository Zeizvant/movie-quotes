<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		Movie::factory()->create([
			'name' => [
				'en' => 'The Terminator',
				'ka' => 'ტერმინატორი',
			],
		]);
		Movie::factory()->create([
			'name' => [
				'en' => 'The Dark Knight',
				'ka' => 'შავი რაინდი',
			],
		]);
		Quote::factory()->create([
			'body'      => [
				'en' => '“I’ll be back.”',
				'ka' => 'ტესტ',
			],
			'thumbnail' => 'images/1.jpeg',
			'movie_id'  => 1,
		]);
		Quote::factory()->create([
			'body'      => [
				'en' => '“You just can’t go around killing people.”',
				'ka' => 'ტესტ',
			],
			'thumbnail' => 'images/2.jpg',
			'movie_id'  => 1,
		]);
		Quote::factory()->create([
			'body'      => [
				'en' => '“Hasta la vista, baby.”',
				'ka' => 'ტესტ',
			],
			'thumbnail' => 'images/3.jpeg',
			'movie_id'  => 1,
		]);
		Quote::factory()->create([
			'body'      => [
				'en' => "“A-Ta-Ta-Ta-Ta, Let's Not Blow This Out Of Proportion.”",
				'ka' => 'ტესტ',
			],
			'thumbnail' => 'images/4.jpeg',
			'movie_id'  => 2,
		]);
	}
}
