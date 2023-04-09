<x-layout lang="{{$lang}}" link="/">
    @if($quote)
        <div class="w-1213 mt-228 h-fit flex flex-col items-center gap-65 text-5xl text-white">
            <img src="{{asset($quote->thumbnail)}}" alt="movie image" class="w-700 h-400 object-cover"/>
            <p>{{ $lang === 'ka' ? $quote->getTranslations('body')['ka'] : $quote->body }}</p>
            <a class="underline mb-169" href="movie/{{ $movie->id }}">{{ $lang === 'ka' ? $movie->getTranslations('name')['ka'] : $movie->name }}</a>
        </div>
    @else
        <div class="w-1213 mt-228 h-fit flex flex-col items-center gap-65 text-5xl text-white">
            <p>No data</p>
        </div>
    @endif
</x-layout>
