<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
	public function login(LoginRequest $request): RedirectResponse
	{
		if (auth()->attempt(['username' => $request->username, 'password' => $request->password])) {
			return redirect()->route('admin.movie.show');
		}
		return back()->withErrors(['password' => 'invalid password']);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect()->route('quote.show');
	}
}
