@props(['movies', 'value', 'type'])
<div class="mt-2">
    <select  id="movie" name="movie_id" autocomplete="movie_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
        <option disabled selected>{{ __('forms.choose_movie') }}</option>
        @foreach($movies as $movie)
            <option value="{{ $movie->id }}" {{ $type === 'update' ? ($movie->id === $value->movie_id ? 'selected' : ''): '' }}>{{ $movie->name }}</option>
        @endforeach
    </select>
</div>
@error('movie')
<p class='text-xs text-red-500'>{{ $message }}</p>
@enderror
