<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
	 */
	public function rules(): array
	{
		return [
			'name.en' => 'required|unique_translation:movies,name,' . $this->movie->id,
			'name.ka' => 'required|unique_translation:movies,name,' . $this->movie->id,
		];
	}
}
