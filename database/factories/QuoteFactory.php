<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'body'      => fake()->paragraph(1),
			'movie_id'  => Movie::factory(),
			'thumbnail' => 'images/' . $this->faker->image(storage_path('app/public/images'), 640, 480, null, false),
		];
	}
}
