<x-layout>
    {{-- Page heading --}}
    <x-slot:heading>
        Login
    </x-slot:heading>

    {{-- Login form --}}
    <form method="POST" action="/login">
        {{-- Laravel security token --}}
        @csrf

        <div class="space-y-6">
            <div class="border-b border-gray-900/10 pb-12">

                <h2 class="text-base font-semibold leading-7 text-gray-900">
                    Login
                </h2>

                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Enter your email and password.
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

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
                    Login
                </button>
            </div>
        </div>
    </form>
</x-layout>