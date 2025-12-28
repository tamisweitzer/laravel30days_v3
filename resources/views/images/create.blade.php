<x-layout>
    <x-slot:heading>Add an Image</x-slot:heading>

    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" class="max-w-xl">
        @csrf

        <x-label-default for="images">Select an image</x-label-default>

        <x-input-text id="images" name='images[]' type="file" accept="image/*" multiple />

        @error('images')
            <div class="text-red-700">{{ $message }}</div>
        @enderror

        <x-button-default class="mt-4" type="Submit">Upload</x-button-default>
    </form>

    <x-button href="/" class="ml-0 mt-8">Back to Home</x-button>
</x-layout>
