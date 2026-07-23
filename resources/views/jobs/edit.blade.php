<x-layout>
    {{-- Page heading --}}
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    {{-- Form for updating an existing job --}}
    <form method="POST" action="/jobs/{{ $job->id }}">
        {{-- Laravel security token --}}
        @csrf

        {{-- Laravel method spoofing because HTML forms do not support PATCH directly --}}
        @method('PATCH')

        <div class="space-y-6">
            <div class="border-b border-gray-900/10 pb-12">

                <h2 class="text-base font-semibold leading-7 text-gray-900">
                    Edit Job
                </h2>

                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Update the job details below.
                </p>

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
                                value="{{ old('title', $job->title) }}"
                                required
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
                                value="{{ old('salary', $job->salary) }}"
                                required
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
            <div class="mt-6 flex items-center justify-between gap-x-6">

                {{-- Delete button --}}
                <button
                    form="delete-form"
                    type="submit"
                    class="text-red-500 text-sm font-bold"
                >
                    Delete
                </button>

                <div class="flex items-center gap-x-6">
                    {{-- Cancel button --}}
                    <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">
                        Cancel
                    </a>

                    {{-- Update button --}}
                    <button
                        type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500"
                    >
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>

    {{-- Hidden delete form --}}
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        {{-- Laravel security token --}}
        @csrf

        {{-- Laravel method spoofing for DELETE --}}
        @method('DELETE')
    </form>
</x-layout>