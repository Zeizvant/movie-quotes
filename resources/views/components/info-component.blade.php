@props(["body", "img", 'link', 'id'])
<div class="h-20 rounded border-4 flex items-center justify-between px-3">
    @if ($img)
        <img class="h-16 w-28 object-cover" src="{{ asset('storage/' . $img) }}" />
    @endif
    <div class="text-lg h-5/6 overflow-y-scroll px-2 w-1/3 lg:w-1/2">{!! $link === 'quote' ? $body->getTranslation('body', app()->getLocale()) : $body->getTranslation('name', app()->getLocale()) !!}</div>
    <div><a href="{{ route("{$link}.edit", [$link => $id]) }}">{{ __('dashboard.update') }}</a></div>
    <form method="POST" action="{{ route("{$link}.delete", [$link => $id]) }}">
        @csrf
        @method('DELETE')
        <button>{{ __('dashboard.delete') }}</button>
    </form>
</div>
