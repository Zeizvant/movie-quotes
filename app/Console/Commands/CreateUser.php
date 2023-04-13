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
	protected $signature = 'app:create-user {username} {password}';

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
				'username'           => $this->argument('username'),
				'password'           => bcrypt($this->argument('password')),
			],
			['username' => ['required', 'unique:users,username'],
				'password' => ['required'],
			]
		);
		if ($validator->fails()) {
			$this->error($validator->errors());
		} else {
			User::factory()->create([
				'username'           => $this->argument('username'),
				'password'           => bcrypt($this->argument('password')),
			]);
		}
	}
}
