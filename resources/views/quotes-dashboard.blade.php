<x-dashboard-header page="quotes">
    <div class="w-full flex flex-col gap-y-1">
        <x-add-button text="{{ __('dashboard.add quote') }}" link="quote"></x-add-button>
        <div class="overflow-y-scroll h-400">
            @foreach($quotes as $quote)
                <x-info-component :body='$quote' id="{{ $quote->id }}" link="quote" img="{!! $quote->thumbnail !!}"></x-info-component>
            @endforeach
        </div>
    </div>
</x-dashboard-header>
