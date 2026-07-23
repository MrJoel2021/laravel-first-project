<x-layout>
    {{-- Page heading --}}
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    {{-- Form for creating a new job --}}
    <form method="POST" action="/jobs">
        {{-- Laravel security token --}}
        @csrf

        <div class="space-y-6">
            {{-- Form box --}}
            <div class="border-b border-gray-900/10 pb-12">

                {{-- Small heading inside the form --}}
                <h2 class="text-base font-semibold leading-7 text-gray-900">
                    Create a New Job
                </h2>

                {{-- Small instruction text --}}
                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Enter Details of Job
                </p>

                {{-- Input fields area --}}
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    {{-- Title input --}}
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">
                            Title
                        </label>

                        <div class="mt-2">
                            <input
                                type="text"
                                name="title"
                                id="title"
                                placeholder="Shift Leader"
                                required
                                value="{{ old('title') }}"
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            >

                            {{-- Show title validation error --}}
                            @error('title')
                                <p class="text-xs text-red-500 font-semibold mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    {{-- Salary input --}}
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">
                            Salary
                        </label>

                        <div class="mt-2">
                            <input
                                type="text"
                                name="salary"
                                id="salary"
                                placeholder="£50000"
                                required
                                value="{{ old('salary') }}"
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            >

                            {{-- Show salary validation error --}}
                            @error('salary')
                                <p class="text-xs text-red-500 font-semibold mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>

            {{-- Buttons --}}
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500"
                >
                    Save
                </button>
            </div>
        </div>
    </form>
</x-layout>