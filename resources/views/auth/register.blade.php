<x-layout>
    {{-- Page heading --}}
    <x-slot:heading>
        Register
    </x-slot:heading>

    {{-- Register form --}}
    <form method="POST" action="/register">
        {{-- Laravel security token --}}
        @csrf

        <div class="space-y-6">
            <div class="border-b border-gray-900/10 pb-12">

                <h2 class="text-base font-semibold leading-7 text-gray-900">
                    Register
                </h2>

                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Create your account.
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    {{-- First name --}}
                    <div class="sm:col-span-4">
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">
                            First Name
                        </label>

                        <div class="mt-2">
                            <input
                                type="text"
                                name="first_name"
                                id="first_name"
                                required
                                value="{{ old('first_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300"
                            >

                            @error('first_name')
                                <p class="text-xs text-red-500 font-semibold mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    {{-- Last name --}}
                    <div class="sm:col-span-4">
                        <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">
                            Last Name
                        </label>

                        <div class="mt-2">
                            <input
                                type="text"
                                name="last_name"
                                id="last_name"
                                required
                                value="{{ old('last_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300"
                            >

                            @error('last_name')
                                <p class="text-xs text-red-500 font-semibold mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                            Email
                        </label>

                        <div class="mt-2">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                required
                                value="{{ old('email') }}"
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300"
                            >

                            @error('email')
                                <p class="text-xs text-red-500 font-semibold mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="sm:col-span-4">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">
                            Password
                        </label>

                        <div class="mt-2">
                            <input
                                type="password"
                                name="password"
                                id="password"
                                required
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300"
                            >

                            @error('password')
                                <p class="text-xs text-red-500 font-semibold mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    {{-- Confirm password --}}
                    <div class="sm:col-span-4">
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">
                            Confirm Password
                        </label>

                        <div class="mt-2">
                            <input
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                required
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300"
                            >
                        </div>
                    </div>

                </div>
            </div>

            {{-- Buttons --}}
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold leading-6 text-gray-900">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500"
                >
                    Register
                </button>
            </div>
        </div>
    </form>
</x-layout>