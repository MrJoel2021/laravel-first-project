{{-- This component creates one navigation link --}}
@props(['active' => false])

<a
    {{-- If active, highlight the link. If not active, use normal grey styling --}}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"

    {{-- Tells the browser/screen reader which page is currently selected --}}
    aria-current="{{ $active ? 'page' : 'false' }}"

    {{-- Adds attributes passed into the component, like href="/about" --}}
    {{ $attributes }}
>
    {{-- Shows the link text, like Home, About, or Contact --}}
    {{ $slot }}
</a>