<!DOCTYPE html>
<html class="h-full bg-gray-50">
<head>
    <title>{{ $type === 'update' ? __('forms.update') : __('forms.add')}}</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full md:flex md:justify-center md:items-center">
    @if($type == 'update' && $data == 'movie')
        <x-store-movie-quotes-form :type="$type" data="{{$data}}" :value="$value"></x-store-movie-quotes-form>
    @elseif($type == 'update' && $data == 'quote')
        <x-store-movie-quotes-form :type="$type" data="{{$data}}" :value="$value" :movies="$movies"></x-store-movie-quotes-form>
    @elseif($data == 'quote')
        <x-store-movie-quotes-form type="$type" data="{{$data}}" :movies="$movies"></x-store-movie-quotes-form>
    @else
        <x-store-movie-quotes-form type="$type" data="{{$data}}"></x-store-movie-quotes-form>
    @endif
</body>
</html>
