<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <title>Laravel Three Page Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">

<div class="min-h-full">

    <!-- Navigation bar -->
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center">

                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img
                        class="h-8 w-8"
                        src="https://laracasts.com/images/logo/logo-triangle.svg"
                        alt="COM431 Website"
                    >
                </div>

                <!-- Left navigation links -->
                <div class="ml-10 flex items-baseline space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')">
                        Home
                    </x-nav-link>

                    <x-nav-link href="/about" :active="request()->is('about')">
                        About
                    </x-nav-link>

                    <x-nav-link href="/contact" :active="request()->is('contact')">
                        Contact
                    </x-nav-link>

                    <x-nav-link href="/jobs" :active="request()->is('jobs*')">
                        Jobs
                    </x-nav-link>
                </div>

                <!-- Right login/register/logout links -->
                <div class="ml-auto flex items-center space-x-4">

                    {{-- Show Login and Register only when user is NOT logged in --}}
                    @guest
                        <x-nav-link href="/login" :active="request()->is('login')">
                            Log In
                        </x-nav-link>

                        <x-nav-link href="/register" :active="request()->is('register')">
                            Register
                        </x-nav-link>
                    @endguest

                    {{-- Show Logout only when user IS logged in --}}
                    @auth
                        <form method="POST" action="/logout">
                            {{-- Laravel security token --}}
                            @csrf

                            <button
                                type="submit"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                            >
                                Log Out
                            </button>
                        </form>
                    @endauth

                </div>

            </div>
        </div>
    </nav>

    <!-- Page heading -->
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                {{ $heading }}
            </h1>
        </div>
    </header>

    <!-- Main content area -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

</div>

</body>
</html>