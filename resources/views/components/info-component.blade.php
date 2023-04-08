@props(["body", "img", 'link', 'id'])
<div class="h-20 rounded border-4 flex items-center justify-between px-3">
    @if ($img)
        <img class="h-16 w-28 object-cover" src="{{ asset($img) }}" />
    @endif
    <p class="text-lg h-full flex justify-center items-center px-2 w-1/3 lg:w-1/2 overflow-y-scroll p-2">{!! $body !!}</p>
    <div>update</div>
    <form method="POST" action="/{{ $link }}/{{ $id }}">
        @csrf
        @method('DELETE')
        <button>delete</button>
    </form>
</div>
