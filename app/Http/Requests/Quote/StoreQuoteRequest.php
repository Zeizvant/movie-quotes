<?php

namespace App\Http\Requests\Quote;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
	 */
	public function rules(): array
	{
		return [
			'name.en'                  => 'required',
			'name.ka'                  => 'required',
			'movie_id'                 => 'required',
			'thumbnail'                => 'required',
		];
	}

	protected function passedValidation()
	{
		$this->merge([
			'body'      => [
				'en' => $this->name['en'],
				'ka' => $this->name['ka'],
			],
		]);
	}
}
