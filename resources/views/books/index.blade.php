<x-master>

    @include('partials._hero')
    @include('partials._search')
    <div
    class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >
    @foreach ($Books as $item)
    {{-- send item to the card --}}
     <x-book-card :item="$item"/> 
    @endforeach
    
    </div>
    </x-master>