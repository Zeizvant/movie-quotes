<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
	public function login(LoginRequest $request): RedirectResponse
	{
		$attributes = ['username' => $request->username, 'password' => $request->password];
		if (auth()->attempt($attributes)) {
			return redirect()->route('movie.showList');
		}
		return back()->withErrors(['password' => 'invalid password']);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect('/');
	}
}
