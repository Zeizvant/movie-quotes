@props(['quote'])
<x-layout>
    @if($quote != null)
        <div class="w-1213 mt-228 h-fit flex flex-col items-center gap-65 text-5xl text-white">
            <img src="{{asset('storage/' . $quote->thumbnail)}}" alt="movie image" class="w-700 h-400 object-cover"/>
            <p class="text-center">{{ $quote->getTranslation('body', app()->getLocale()) }}</p>
            <a class="underline mb-169" href="{{ route("movie.show", ['movie' => $quote->movie->id]) }}">{{ $quote->movie->getTranslation('name', app()->getLocale()) }}</a>
        </div>
    @else
        <div class="w-1213 mt-228 h-fit flex flex-col items-center gap-65 text-5xl text-white">
            <p>{{ __('dashboard.no_data') }}</p>
        </div>
    @endif
</x-layout>
