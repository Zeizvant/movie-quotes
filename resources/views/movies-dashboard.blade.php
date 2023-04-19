<x-dashboard-header page="movies">
    <div class="w-full flex flex-col gap-y-1">
        <x-add-button text="{{ __('dashboard.add_movie') }}" link="movie"></x-add-button>
        <div class="overflow-y-scroll h-400">
            @foreach($movies as $movie)
                <x-info-component :body='$movie' id="{{ $movie->id }}" link="movie" img="{{false}}"></x-info-component>
            @endforeach
        </div>
    </div>
</x-dashboard-header>
