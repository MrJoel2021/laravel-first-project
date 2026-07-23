<x-layout>
    {{-- Page heading --}}
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    {{-- Space between each job card --}}
    <div class="space-y-4">
        {{-- Loop through every job --}}
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">

                {{-- Employer name --}}
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>

                {{-- Job title and salary --}}
                <div>
                    <strong>{{ $job->title }}</strong>: Pays {{ $job->salary }} per year
                </div>

            </a>
        @endforeach
    </div>

    {{-- Pagination links --}}
    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>