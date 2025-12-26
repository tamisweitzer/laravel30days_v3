<x-layout>
    <x-slot:heading>Add an Image</x-slot:heading>

    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="images">Select an image</label>
        <input id="images" name='images[]' type="file" accept="image/*" class="border border-gray-300 rounded"
            multiple>
        <button type="Submit">Upload</button>

        @error('images')
            <div class="text-red-700">{{ $message }}</div>
        @enderror
    </form>

    <x-button href="/" class="ml-0 mt-8">Back to Home</x-button>
</x-layout>
