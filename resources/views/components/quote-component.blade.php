@props(['src', 'body'])
<div>
    <img class="w-748 z-0" src="{{asset($src)}}" alt="movie image"/>
    <div class="w-full h-[120px] bg-white text-black flex justify-center items-center rounded-b-xl -mt-1">
        <p class="text-4xl">{{$body}}</p>
    </div>
</div>
