<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <!-- Browser tab title -->
    <title>Laravel Three Page Website</title>

    <!-- Tailwind CSS -->
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

                    <!-- 
                        The colon before active means Laravel runs the PHP expression.
                        request()->is('/') returns true or false.
                    -->
                    <x-nav-link href="/" :active="request()->is('/')">
                        Home
                    </x-nav-link>

                    <x-nav-link href="/about" :active="request()->is('about')">
                        About
                    </x-nav-link>

                    <x-nav-link href="/contact" :active="request()->is('contact')">
                        Contact
                    </x-nav-link>

                </div>
            </div>
        </div>
    </nav>

    <!-- Page heading area -->
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <!-- Named slot: page heading appears here -->
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                {{ $heading }}
            </h1>

        </div>
    </header>

    <!-- Main content area -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            {{-- Default slot: page content appears here --}}
            {{ $slot }}

        </div>
    </main>

</div>

</body>
</html>