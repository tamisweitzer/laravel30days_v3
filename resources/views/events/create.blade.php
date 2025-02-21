<x-layout>
    <x-slot:heading>Events</x-slot:heading>
    <x-wrapper-narrow>
        @csrf

        <x-page-title>Create a New Event</x-page-title>

        <form action="/events/create" method="post" class="mb-12">
            @csrf
            <x-form-group>
                <x-label-default for="name">Name</x-label-default>
                <x-input-text id="name" name="name"></x-input-text>
            </x-form-group>

            <x-form-group>
                <x-label-default for="admin_name">admin_name</x-label-default>
                <x-input-text id="admin_name" name="admin_name"></x-input-text>
            </x-form-group>


            <x-form-group>
                <x-label-default for="band">band</x-label-default>
                <select name="band" id="band" class="block w-full border shadow-inner p-1">
                    @foreach ($bands as $band)
                        <option id="band_{{ $band->id }}" value="{{ $band->id }}">{{ $band->name }}
                        </option>
                    @endforeach
                </select>
            </x-form-group>

            <x-form-group>
                <x-label-default for="venue">Venue</x-label-default>
                <select name="venue" id="venue" class="block w-full border shadow-inner p-1">
                    @foreach ($venues as $venue)
                        <option id="venue_{{ $venue->id }}" value="{{ $venue->id }}">{{ $venue->id }}
                            {{ $venue->name }}
                        </option>
                    @endforeach
                </select>
            </x-form-group>

            <x-form-group>
                <x-label-default for="event_date">Event Date</x-label-default>
                <input type="date" id="event_date" name="event_date">
            </x-form-group>

            <x-form-group>
                <x-label-default for="event_time">event_time</x-label-default>
                <x-input-text id="event_time" name="event_time"></x-input-text>
            </x-form-group>

            <x-form-group>
                <x-label-default for="event_details">event_details</x-label-default>
                <x-input-text id="event_details" name="event_details"></x-input-text>
            </x-form-group>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </x-wrapper-narrow>
</x-layout>
