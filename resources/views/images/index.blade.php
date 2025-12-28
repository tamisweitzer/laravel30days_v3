<x-layout>
    <x-slot:heading>Images</x-slot:heading>

    <div class="my-4">
        <x-anchor href="{{ route('images.create') }}">Upload an Image</x-anchor>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
        @foreach ($images as $image)
            <div class="">
                <img src="{{ asset('storage/' . $image->path . ' ') }}" alt="{{ $image->file_name }}" class="w-full" />
                <p>{{ $image->id }} {{ $image->file_name }}</p>
            </div>
        @endforeach
    </div>

    <x-button href="/" class="ml-0 mt-8">Back to Home</x-button>
</x-layout>
