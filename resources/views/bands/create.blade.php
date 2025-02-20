<x-layout>
    <x-slot:heading>Add Band</x-slot:heading>
    <h2 class="text-2xl">Add a new band</h2>
    ... todo
    <form action="/events/create" method="post" class="mb-12">
        @csrf
        <x-form-group>
            <x-label-default for="name">Name</x-label-default>
            <x-input-text id="name" name="name"></x-input-text>
        </x-form-group>

        <x-form-group>
            <x-label-default for="fullname">FullName</x-label-default>
            <x-input-text id="fullname" name="fullname"></x-input-text>
        </x-form-group>

        <x-form-group>
            <x-label-default for="excerpt">Excerpt</x-label-default>
            <x-input-text-area name="excerpt" id="excerpt"
                placeholder="A sentence or two about you..."></x-input-text-area>
        </x-form-group>

        <x-form-group>
            <x-label-default for="bio">Bio</x-label-default>
            <x-input-text-area name="bio" id="bio"
                placeholder="A few more sentences about you..."></x-input-text-area>
        </x-form-group>

        <x-form-group>
            <x-label-default for="city">city</x-label-default>
            <select name="city" id="city" class="block w-full border shadow-inner p-1">
                @foreach ($cities as $city)
                    <option id="city_{{ $city->id }}" value="{{ $city->id }}">{{ $city->name }}
                    </option>
                @endforeach
            </select>
        </x-form-group>

        <x-form-group>
            <x-label-default for="state">state</x-label-default>
            <select name="state" id="state" class="block w-full border shadow-inner p-1">
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </x-form-group>

        <x-form-group>
            <x-label-default for="xxx">website url</x-label-default>
            <x-input-text id="xxx" name="xxx"></x-input-text>
        </x-form-group>

        <x-form-group>
            <x-label-default for="xxx">thumbnail</x-label-default>
            {{-- <x-input-text id="xxx" name="xxx"></x-input-text> --}}
            <input type="file" accept=".jpg,.jpeg,.png,.webp" class="block w-full border shadow-inner p-1">
        </x-form-group>

        <x-form-group>
            <x-label-default for="xxx">banner img</x-label-default>
            <input type="file" accept=".jpg,.jpeg,.png,.webp" class="block w-full border shadow-inner p-1">
        </x-form-group>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</x-layout>
