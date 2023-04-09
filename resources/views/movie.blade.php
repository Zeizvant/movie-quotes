<x-layout lang="{{$lang}}" link="{{'/movie/' . $movie->id . '/'}}">
    @if($movie)
        <div class="mt-40 lg:mt-20 mb-20">
            <h1 class="text-white text-5xl">{{ $lang === 'ka' ? $movie->getTranslations('name')['ka'] : $movie->name }}</h1>
            <div class="flex flex-col gap-y-16 mt-[82px]">
                @foreach($quotes as $quote)
                    <x-quote-component src="{!! $quote->thumbnail !!}" body="{!! $lang === 'ka' ? $quote->getTranslations('body')['ka'] : $quote->body !!}" />
                @endforeach
            </div>
        </div>
    @else
        <div class="mt-40 lg:mt-20 mb-20">
            <h1 class="text-white text-5xl">no data</h1>
        </div>
    @endif

</x-layout>
