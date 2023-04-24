<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Movie;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		Storage::makeDirectory('images');
		Movie::factory()->create();
		Quote::factory(5)->create();

		User::factory()->create([
			'username' => 'admin',
			'password' => bcrypt('admin'),
		]);
	}
}
