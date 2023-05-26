<x-layout>
    @include('partials._hero') @include('partials._search') {{-- <h1>Latest{{ $heading }}</h1> --}}
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-4 mx-4">
        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" class="bg-gray-50 p-6" />
            @endforeach
        @else
            <p>No Listing Not Found</p>
        @endunless
    </div>

    <div class="mt-4 p-4">
        {{ $listings->links() }}
    </div>
</x-layout>
