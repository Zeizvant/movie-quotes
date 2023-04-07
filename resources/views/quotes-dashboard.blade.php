<x-dashboard-header page="quotes">
    <div class="w-full flex flex-col gap-y-1">
        <div class="overflow-y-scroll h-400">
            <x-add-button text="add quote"></x-add-button>
            @foreach($quotes as $quote)
                <x-info-component body="{{ $quote->body }}" img='/images/image.png'></x-info-component>
            @endforeach
        </div>
    </div>
</x-dashboard-header>
