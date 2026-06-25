<x-layout>
    {{-- Heading for one job page --}}
    <x-slot:heading>
        Job
    </x-slot:heading>

    {{-- This page receives one $job from the database --}}
    <h2 class="font-bold text-lg">
        {{ $job->title }}
    </h2>

    {{-- Show the selected job salary --}}
    <p>
        This job pays {{ $job->salary }} per year.
    </p>
</x-layout>