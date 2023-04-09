<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
	public function login(): RedirectResponse
	{
		$attributes = request()->validate([
			'username' => ['required', 'exists:users'],
			'password' => ['required'],
		]);
		if (auth()->attempt($attributes)) {
			return redirect('/admin-quotes');
		}
		return back()->withErrors(['password' =>'invalid password']);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect('/');
	}
}
