<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                View Assignment
            </h2>
            <a href="{{ route('assignments.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded text-sm">
                + Create New
            </a>
        </div>
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
                    <table class="w-full">
                        <thead>
                            <tr class="border-b-2 border-gray-300">
                                <th class="text-left py-3 px-4">Assignment Name</th>
                                <th class="text-center py-3 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($assignments as $assignment)
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-4">{{ $assignment->title }}</td>
                                    <td class="py-3 px-4 text-center">
                                        <a href="{{ route('assignments.edit', $assignment->id) }}" 
                                           class="bg-blue-200 hover:bg-blue-300 px-4 py-1 rounded text-sm mx-1">
                                            EDIT
                                        </a>
                                        <a href="{{ route('assignments.show', $assignment->id) }}" 
                                           class="bg-blue-300 hover:bg-blue-400 px-4 py-1 rounded text-sm mx-1">
                                            VIEW
                                        </a>
                                        <form action="{{ route('assignments.destroy', $assignment->id) }}" 
                                              method="POST" class="inline" 
                                              onsubmit="return confirm('Delete this assignment?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-blue-400 hover:bg-blue-500 px-4 py-1 rounded text-sm mx-1">
                                                DELETE
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="py-6 text-center text-gray-500">
                                        No assignments yet
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>