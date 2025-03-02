<x-layout>
    <x-slot:heading>Edit Job</x-slot:heading>

    <form method="POST" action="/ourjobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Edit job: {{ $job->title }}</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 pr-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 border">
                                <input type="text" name="title" id="title"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Programmer" value="{{ $job->title }}">
                            </div>
                            @error('title')
                                <div class="mt-2 text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 border">
                                <input type="text" name="salary" id="salary"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="$80,000/year" value="{{ $job->salary }}">
                            </div>
                            @error('salary')
                                <div class="mt-2 text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="">
                <x-button-default form="delete-form"
                    class="bg-red-500 border-rose-500 text-white">Delete</x-button-default>
            </div>
            <div>
                <x-button href="/ourjobs/{{ $job->id }}">Cancel</x-button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update
                </button>
            </div>
        </div>
    </form>

    <form method="POST" action="/ourjobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
