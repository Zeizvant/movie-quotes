<x-layout >
    @if($quote->isNotEmpty())
        @php
            $quote = \App\Models\Quote::all()->random();
            $movie = $quote->movie;
        @endphp
        <div class="w-1213 mt-228 h-fit flex flex-col items-center gap-65 text-5xl text-white">
            <img src="{{asset($quote->thumbnail)}}" alt="movie image" class="w-700 h-400 object-cover"/>
            <p>{{ $quote->getTranslation('body', app()->getLocale()) }}</p>
            <a class="underline mb-169" href="{{ route("movie.show", ['movie' => $movie->id]) }}">{{ $movie->getTranslation('name', app()->getLocale()) }}</a>
        </div>
    @else
        <div class="w-1213 mt-228 h-fit flex flex-col items-center gap-65 text-5xl text-white">
            <p>{{ __('dashboard.no data') }}</p>
        </div>
    @endif
</x-layout>
