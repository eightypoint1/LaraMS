<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Assignments
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <div class="space-y-4">
                @forelse($assignments as $assignment)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-200">
                        <div class="p-6 flex justify-between items-start">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold mb-1">New Assignment: {{ $assignment->title }}</h3>
                                <p class="text-sm text-gray-500">Posted in {{ $assignment->created_at->format('Y-m-d') }}</p>
                            </div>
                            <a href="{{ route('assignments.show', $assignment->id) }}" 
                               class="bg-blue-200 hover:bg-blue-300 px-8 py-2 rounded text-sm font-medium">
                                VIEW
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 text-center">
                            No assignments available
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>