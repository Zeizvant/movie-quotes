<!DOCTYPE html>
<html class="h-full bg-gray-50">
<head>
    <title>{{ $type === 'update' ? __('forms.update') : __('forms.add')}}</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full md:flex md:justify-center md:items-center">
<form method="POST" action="{{ $type === 'update'? route($data . '.update', [$data => $value->id]) : route($data . '.store') }}" enctype="multipart/form-data" class="md:w-1/2  m-10">
    @csrf
    @if($type === 'update')
        @method('PUT')
    @endif
    <div class="space-y-12 overflow-y-scroll">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">{{$type === 'update' ? __('forms.update') : __('forms.add')  }}</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="name_en" class="block text-sm font-medium leading-6 text-gray-900">{{ $data === 'movie' ? __('forms.name') : __('forms.body')}} en</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input value="{{ $type === 'update' ? ($data === 'movie'? $value->getTranslation('name', 'en') : $value->getTranslation('body', 'en')): '' }}" type="text" name="name[en]" id="name_en" autocomplete="name_en" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="{{ $data === 'movie' ? __('forms.enter name') : __('forms.enter quote')}}" />
                        </div>
                        @error('name.en')
                        <p class='text-xs text-red-500'>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="name_ka" class="block text-sm font-medium leading-6 text-gray-900">{{ $data === 'movie' ? __('forms.name') : __('forms.body')}} ka</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input value="{{ $type === 'update' ? ($data === 'movie'? $value->getTranslation('name', 'ka') : $value->getTranslation('body', 'ka')): '' }}" type="text" name="name[ka]" id="name_ka" autocomplete="name_ka" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="{{ $data === 'movie' ? __('forms.enter name') : __('forms.enter quote')}}" />
                        </div>
                        @error('name.ka')
                        <p class='text-xs text-red-500'>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                @if($data === 'quote')
                    <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">{{ __('forms.photo') }}</label>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600 flex justify-center">
                                    <label for="thumbnail" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span >{{ __('forms.upload') }}</span>
                                        <input id="thumbnail" name="thumbnail" type="file" class="sr-only">
                                    </label>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                        @error('thumbnail')
                        <p class='text-xs text-red-500'>{{ $message }}</p>
                        @enderror
                    </div>
                @endif
            </div>
        </div>
        @if($data === 'quote')
            <div class="sm:col-span-3">
                <label for="movie" class="block text-sm font-medium leading-6 text-gray-900">{{ __('forms.movie') }}</label>
                <div class="mt-2">
                    <select  id="movie" name="movie_id" autocomplete="movie_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option disabled selected>{{ __('forms.choose movie') }}</option>
                        @foreach($movies as $movie)
                            <option {{ $type === 'update' ? ($movie->id === $value->movie_id ? 'selected' : ''): '' }}>{{ $movie->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('movie')
                <p class='text-xs text-red-500'>{{ $message }}</p>
                @enderror
            </div>
        @endif
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                {{ $type === 'update' ? __('forms.update') :  __('forms.save') }}</button>
        </div>
    </div>
</form>
</body>
</html>
