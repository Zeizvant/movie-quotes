@props(['type', 'value', 'data', 'movies'])
<form method="POST" action="{{ $type === 'update'? route($data . '.update', [$data => $value->id]) : route($data . '.store') }}" enctype="multipart/form-data" class="md:w-1/2  m-10">
    @csrf
    @if($type === 'update')
        @method('PUT')
    @endif
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">{{$type === 'update' ? __('forms.update') : __('forms.add')  }}</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="name_en" class="block text-sm font-medium leading-6 text-gray-900">{{ $data === 'movie' ? __('forms.name') : __('forms.body')}} en</label>
                    <div class="mt-2">
                        <x-text-input-en type="{{ $type }}" data="{{ $data }}" value="{{ $type === 'update' ? ($data === 'movie'? $value->getTranslation('name', 'en') : $value->getTranslation('body', 'en')): '' }}" ></x-text-input-en>
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="name_ka" class="block text-sm font-medium leading-6 text-gray-900">{{ $data === 'movie' ? __('forms.name') : __('forms.body')}} ka</label>
                    <div class="mt-2">
                        <x-text-input-ka type="{{ $type }}" data="{{ $data }}" value="{{ $type === 'update' ? ($data === 'movie'? $value->getTranslation('name', 'ka') : $value->getTranslation('body', 'ka')): '' }}"></x-text-input-ka>
                    </div>
                </div>
                @if($data === 'quote')
                    <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">{{ __('forms.photo') }}</label>
                        <x-image-input></x-image-input>
                    </div>
                @endif
            </div>
        </div>
        @if($data === 'quote')
            <div class="sm:col-span-3">
                <label for="movie" class="block text-sm font-medium leading-6 text-gray-900">{{ __('forms.movie') }}</label>
                @if($type == 'update')
                    <x-movies-select-options type="{{ $type }}" :movies="$movies" :value="$value" ></x-movies-select-options>
                @else
                    <x-movies-select-options type="{{ $type }}" :movies="$movies" ></x-movies-select-options>
                @endif
            </div>
        @endif
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                {{ $type === 'update' ? __('forms.update') :  __('forms.save') }}</button>
        </div>
    </div>
</form>
