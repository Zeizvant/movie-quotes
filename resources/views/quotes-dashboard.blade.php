<x-dashboard-header page="quotes">
    <div class="w-full flex flex-col gap-y-1">
        <x-add-button text="add quote" link="quotes"></x-add-button>
        <div class="overflow-y-scroll h-400">
            @foreach($quotes as $quote)
                <x-info-component body="{{ $quote->body }}" id="{{ $quote->id }}" link="quotes" img="{!! $quote->thumbnail !!}"></x-info-component>
            @endforeach
        </div>
    </div>
</x-dashboard-header>
