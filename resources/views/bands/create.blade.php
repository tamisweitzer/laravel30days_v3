<x-layout>
    <x-slot:heading>Add Band</x-slot:heading>

    <h2 class="text-2xl">Add a new band</h2>

    <form action="/bands/create" method="post" class="mb-12">
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
            <x-label-default for="city_id">city</x-label-default>
            <select name="city_id" id="city_id" class="block w-full border shadow-inner p-1">
                <option value="null">What city are you based out of</option>
                @foreach ($cities as $city)
                    <option id="city_{{ $city->id }}" value="{{ $city->id }}">{{ $city->name }}
                    </option>
                @endforeach
            </select>
        </x-form-group>

        <x-form-group>
            <x-label-default for="state_id">state</x-label-default>
            <select name="state_id" id="state_id" class="block w-full border shadow-inner p-1">
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </x-form-group>

        <x-form-group>
            <x-label-default for="website_url">website url</x-label-default>
            <x-input-text id="website_url" name="website_url"></x-input-text>
        </x-form-group>

        <x-form-group>
            <x-label-default for="thumbnail_img">thumbnail</x-label-default>
            {{-- <x-input-text id="xxx" name="xxx"></x-input-text> --}}
            <input type="file" id="thumbnail_img" name="thumbnail_img" accept=".jpg,.jpeg,.png,.webp"
                class="block w-full border shadow-inner p-1">
        </x-form-group>

        <x-form-group>
            <x-label-default for="banner_img">banner img</x-label-default>
            <input type="file" id="banner_img" name="banner_img" accept=".jpg,.jpeg,.png,.webp"
                class="block w-full border shadow-inner p-1">
        </x-form-group>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</x-layout>
