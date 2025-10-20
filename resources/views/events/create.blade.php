<x-layout>
    <x-slot:heading>Events</x-slot:heading>
    <x-wrapper-narrow>
        @csrf

        <x-page-title>Create a New Event</x-page-title>

        <form action="/events/create" method="post" class="mb-12">
            @csrf
            <x-form-group>
                <x-label-default for="name">Nick Name</x-label-default>
                <x-input-text id="name" name="name" placeholder="John Jackson at The Wharf"></x-input-text>
            </x-form-group>

            <x-form-group>
                <x-label-default for="admin_name">Full, proper name</x-label-default>
                <x-input-text id="admin_name" name="admin_name"
                    placeholder="John Jackson Music at The Wharf Bar and Grille"></x-input-text>
            </x-form-group>


            <x-form-group>
                <x-label-default for="band">Band</x-label-default>
                <select name="band" id="band"
                    class="block w-full border shadow-inner py-1.5 pr-3 pl-1 text-base text-gray-400">
                    <option value="null">Choose the band</option>
                    @foreach ($bands as $band)
                        <option id="band_{{ $band->id }}" value="{{ $band->id }}">{{ $band->name }}
                        </option>
                    @endforeach
                    <option value="band-not-listed">My band is not listed</option>
                </select>
            </x-form-group>

            <x-form-group>
                <x-label-default for="venue">Venue</x-label-default>
                <select name="venue" id="venue"
                    class="block w-full border shadow-inner py-1.5 pr-3 pl-1 text-base text-gray-400">
                    <option value="null">Choose the Venue</option>
                    @foreach ($venues as $venue)
                        <option id="venue_{{ $venue->id }}" value="{{ $venue->id }}">{{ $venue->id }}
                            {{ $venue->name }}
                        </option>
                    @endforeach
                    <option value="venue-not-listed">My venue is not listed</option>
                </select>
            </x-form-group>

            <x-form-group>
                <x-label-default for="event_date">Event Date</x-label-default>
                <input type="date" id="event_date" class="text-gray-400 py-1.5 pr-3 pl-1 text-base"
                    name="event_date">
            </x-form-group>

            <x-form-group>
                <x-label-default for="event_time">event_time</x-label-default>
                <x-input-text id="event_time" class="" name="event_time" placeholder="8:00 pm"></x-input-text>
            </x-form-group>

            <x-form-group>
                <x-label-default for="event_details">event_details</x-label-default>
                <x-input-text-area id="event_details" class="px-2" name="event_details"></x-input-text-area>
            </x-form-group>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </x-wrapper-narrow>
</x-layout>
