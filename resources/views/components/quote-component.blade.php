@props(['src', 'body'])
<div class=" md:w-748 flex flex-col">
    <img class="w-748 h-400 object-cover z-0" src="{{asset('storage/' . $src)}}" alt="movie image"/>
    <div class="w-full min-h-[120px] bg-white text-black flex justify-center items-center rounded-b-xl -mt-1 p-10">
        <p class="text-4xl text-center">{{$body}}</p>
    </div>
</div>
