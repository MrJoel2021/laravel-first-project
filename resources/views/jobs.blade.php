<x-layout>
    {{-- Heading for the jobs listing page --}}
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    {{-- This page receives $jobs from the database --}}
    <ul>
        {{-- Loop through every job --}}
        @foreach ($jobs as $job)
            <li>
                {{-- Link to the single job page using the job id --}}
                <a href="/jobs/{{ $job->id }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job->title }}</strong>: Pays {{ $job->salary }} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>