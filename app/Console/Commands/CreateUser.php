<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

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
		User::factory()->create([
			'username'           => $this->argument('username'),
			'password'           => bcrypt($this->argument('password')),
			'remember_token'     => Str::random(10),
		]);
	}
}
