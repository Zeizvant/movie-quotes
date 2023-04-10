<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie Quotes</title>
        @vite('resources/css/app.css')
    </head>
    <body class="w-full flex justify-center gradient static">
        <div class="absolute lg:fixed left-[54px] inset-y-0 flex flex-col flex flex-col mt-5 lg:justify-center space-y-[15px]">
            <div class="language-buttons bg-white text-black bg-white">en</div>
            <div class="language-buttons">ka</div>
        </div>
        {{ $slot }}
    </body>
</html>
