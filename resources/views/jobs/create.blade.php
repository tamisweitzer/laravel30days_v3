<x-layout>
    <x-slot:heading>Create Job</x-slot:heading>

    <form method="POST" action"/ourjobs/create">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a few details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <x-input-text type="text" name="title" id="title"
                                placeholder="Programmer"></x-input-text>
                            <x-form-error field="title"></x-form-error>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <x-input-text type="text" name="salary" id="salary"
                                placeholder="$80,000/year"></x-input-text>
                            <x-form-error field="salary"></x-form-error>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-button>Cancel</x-button>
            <x-button-purple type="submit">Create</x-button-purple>
        </div>
    </form>
</x-layout>
