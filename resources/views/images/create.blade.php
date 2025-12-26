<x-layout>
    <x-slot:heading>Add an Image</x-slot:heading>

    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image">Select an image</label>
        <input id="image" name='image[]' type="file" accept="image/*" multiple>
        <button type="Submit">Upload</button>
    </form>

    <x-button href="/" class="ml-0 mt-8">Back to Home</x-button>
</x-layout>
