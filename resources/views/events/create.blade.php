<x-layout>
    <x-slot:heading>Events</x-slot:heading>
    <x-wrapper-narrow>
        @csrf

        <x-page-title>Create a New Event</x-page-title>

        <form action="/bands/create" method="post" class="mb-12">
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
                <x-label-default for="xxx">city</x-label-default>
                <select name="city" id="city" class="block w-full border shadow-inner p-1">
                    @foreach ($cities as $city)
                        <option id="city_{{ $city->id }}" value="{{ $city->id }}">{{ $city->name }}
                        </option>
                    @endforeach
                </select>
            </x-form-group>

            <x-form-group>
                <x-label-default for="xxx">state</x-label-default>
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
        </form>
    </x-wrapper-narrow>
</x-layout>
