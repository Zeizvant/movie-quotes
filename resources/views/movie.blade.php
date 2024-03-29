<x-layout >
    @if($movie)
        <div class="mt-40 lg:mt-20 mb-20">
            <h1 class="text-white text-5xl">{{ $movie->getTranslation('name', app()->getLocale()) }}</h1>
            @if(count($quotes) > 0)
                <div class="flex flex-col gap-y-16 mt-[82px]">
                    @foreach($quotes as $quote)
                        <x-quote-component src="{!! $quote->thumbnail !!}" body="{!! $quote->getTranslation('body', app()->getLocale()) !!}" />
                    @endforeach
                </div>
            @else
                <div class="mt-40 lg:mt-20 mb-20">
                    <h1 class="text-white text-5xl">{{ __('dashboard.no_data') }}</h1>
                </div>
            @endif
        </div>
    @else
        <div class="mt-40 lg:mt-20 mb-20">
            <h1 class="text-white text-5xl">{{ __('dashboard.no_data') }}</h1>
        </div>
    @endif
</x-layout>
