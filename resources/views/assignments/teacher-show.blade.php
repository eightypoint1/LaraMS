<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Grade Submissions
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h1 class="text-xl font-bold mb-6">View: {{ $assignment->title }}</h1>

                    <table class="w-full">
                        <thead>
                            <tr class="border-b-2 border-gray-300">
                                <th class="text-left py-3 px-4">Student Name</th>
                                <th class="text-center py-3 px-4">Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($submissions as $submission)
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-4">{{ $submission->user->name }}</td>
                                    <td class="py-3 px-4">
                                        <form action="{{ route('tasks.update', $submission->id) }}" method="POST" class="flex justify-center items-center gap-2">
                                            @csrf
                                            @method('PUT')
                                            <input type="number" name="score" min="0" max="100" 
                                                   value="{{ $submission->score }}"
                                                   placeholder="Input Mark" 
                                                   class="bg-gray-200 px-3 py-1 rounded w-32 text-center text-sm border-0">
                                            <button type="submit" class="bg-gray-300 hover:bg-gray-400 px-4 py-1 rounded text-sm">
                                                Edit
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="py-6 text-center text-gray-500">
                                        No submissions yet
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    @if($submissions->count() > 0)
                        <div class="mt-6 text-center">
                            <button type="button" onclick="alert('All changes are saved automatically')" 
                                    class="bg-blue-200 hover:bg-blue-300 px-24 py-2 rounded text-sm font-medium">
                                SAVE
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>