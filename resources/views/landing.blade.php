<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie Quotes</title>
        @vite('resources/css/app.css')
    </head>
    <body class="w-full h-full flex justify-center gradient static">
        <div class="w-1213 mt-228 h-fit flex flex-col items-center gap-65 text-5xl text-white mb-169">
            <img src="./images/image.png" class="w-700"/>
            <p>“What should I tell you your mother?!”</p>
            <a class="underline" href="#">The Son of Soldier</a>
        </div>
        <div class="fixed left-[54px] inset-y-0 flex flex-col flex flex-col mt-5 lg:justify-center space-y-[15px]">
            <div class="language-buttons">en</div>
            <div class="language-buttons bg-white text-black bg-white ">ka</div>
        </div>
    </body>
</html>
