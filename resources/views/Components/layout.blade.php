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

                <!-- Navigation links -->
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

                    <x-nav-link href="/jobs" :active="request()->is('jobs')">
                        Jobs
                    </x-nav-link>
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