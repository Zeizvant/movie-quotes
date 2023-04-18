<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'app:create-user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create an User ';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$validator = Validator::make(
			[
				'username'                => $this->ask('username: '),
				'password'                => $password = $this->secret('password: '),
				'password_confirmation'   => $password = $this->secret('confirm password: '),
			],
			[
				'username'         => ['bail', 'required', 'unique:users,username'],
				'password'         => ['required', 'confirmed'],
			]
		);
		if ($validator->fails()) {
			$this->error($validator->errors());
		} else {
			User::factory()->create([
				'username'           => $validator->validated()['username'],
				'password'           => bcrypt($validator->validated()['password']),
			]);
		}
	}
}
