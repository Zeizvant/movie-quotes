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
		//		\App\Models\Movie::factory(5)->create();
		Movie::factory()->create([
			'name' => 'The Terminator',
		]);
		Movie::factory()->create([
			'name' => 'The Dark Knight',
		]);
		Quote::factory()->create([
			'body'      => '“I’ll be back.”',
			'thumbnail' => 'images/1.jpeg',
			'movie_id'  => 1,
		]);
		Quote::factory()->create([
			'body'      => '“You just can’t go around killing people.”',
			'thumbnail' => 'images/2.jpg',
			'movie_id'  => 1,
		]);
		Quote::factory()->create([
			'body'      => '“Hasta la vista, baby.”',
			'thumbnail' => 'images/3.jpeg',
			'movie_id'  => 1,
		]);
		Quote::factory()->create([
			'body'      => "“A-Ta-Ta-Ta-Ta, Let's Not Blow This Out Of Proportion.”",
			'thumbnail' => 'images/4.jpeg',
			'movie_id'  => 2,
		]);
		Quote::factory()->create([
			'body'      => "“I'm Batman.”",
			'thumbnail' => 'images/5.jpeg',
			'movie_id'  => 2,
		]);

		//		\App\Models\Quote::factory(5)->create();
		//		\App\Models\User::factory(10)->create();

		//		\App\Models\User::factory()->create([
		//			'username'  => 'Test User',
		//			'email' => 'test@example.com',
		//		]);
	}
}
