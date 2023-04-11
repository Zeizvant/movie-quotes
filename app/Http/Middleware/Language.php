<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Language
{
	public function handle(Request $request, Closure $next)
	{
		App::setLocale(session()->get('locale') ?? 'en');
		return $next($request);
	}
}
