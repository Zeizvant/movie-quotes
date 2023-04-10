@props(['text', 'link'])
<div class="cursor-pointer rounded-md bg-indigo-600 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
    <a href="{{ route("{$link}.create") }}">{{ $text }}</a>
</div>
