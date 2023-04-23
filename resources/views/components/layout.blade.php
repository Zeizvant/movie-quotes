<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('dashboard.movie_quotes') }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="w-full flex justify-center gradient static">
        <div class="absolute lg:fixed left-[54px] inset-y-0 flex flex-col flex flex-col mt-5 lg:justify-center space-y-[15px]">
            <a href="{{ route('language.change', ['locale' => 'en']) }}"><div class="{{ app()->getLocale() === 'en' ?  'language-buttons bg-white text-black bg-white' : 'language-buttons'}}">en</div></a>
            <a href="{{ route('language.change', ['locale' => 'ka']) }}"><div class="{{ app()->getLocale() === 'ka' ?  'language-buttons bg-white text-black bg-white' : 'language-buttons'}}">ka</div></a>
        </div>
        {{ $slot }}
    </body>
</html>
