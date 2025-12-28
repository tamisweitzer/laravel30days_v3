<x-layout>
    <x-slot:heading>Images</x-slot:heading>

    <div class="my-4">
        <x-anchor href="{{ route('images.create') }}">Upload an Image</x-anchor>
    </div>

    @if (count($images) > 0)
        <div class="grid  grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            {{-- @dd($images) --}}
            @foreach ($images as $image)
                {{-- @dd($image) --}}
                <div class="border border-gray-200">
                    <a href="{{ asset('storage/' . $image->path . ' ') }}">
                        <img src="{{ asset('storage/' . $image->path . ' ') }}" alt="{{ $image->file_name }}"
                            class="w-full" />
                        <p class="p-1 text-xs text-wrap break-words">{{ $image->id }} {{ $image->image_name }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <div>No images found</div>
    @endif
    <x-button href="/" class="ml-0 mt-8">Back to Home</x-button>
</x-layout>
