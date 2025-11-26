<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Assignment Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">
                <div class="p-8">
                    <h1 class="text-2xl font-bold mb-2">{{ $assignment->title }}</h1>
                    <p class="text-sm text-gray-500 mb-8">Posted in {{ $assignment->created_at->format('Y-m-d') }}</p>

                    <div class="mb-6">
                        <label class="block bg-gray-200 px-4 py-2 mb-2 text-sm font-medium">Description Assignment</label>
                        <div class="bg-gray-100 px-4 py-4 min-h-[100px]">
                            {{ $assignment->description }}
                        </div>
                    </div>

                    @if(!$submission)
                        <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="assigment_id" value="{{ $assignment->id }}">
                            
                            <div class="flex gap-2 mb-6">
                                <label for="file_path" class="bg-blue-200 hover:bg-blue-300 px-6 py-2 rounded cursor-pointer text-sm font-medium">
                                    Browse
                                </label>
                                <input type="file" id="file_path" name="file_path" class="hidden" onchange="document.getElementById('file-name').textContent = this.files[0]?.name || 'No File Selected'" required>
                                <span id="file-name" class="bg-gray-100 px-4 py-2 flex-1 text-sm text-gray-500">No File Selected</span>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="bg-blue-200 hover:bg-blue-300 px-24 py-2 rounded text-sm font-medium">
                                    SUBMIT
                                </button>
                            </div>
                        </form>
                    @else
                        <div class="bg-green-100 border border-green-400 p-4 rounded text-center">
                            <p class="font-medium text-green-800">✓ Already Submitted</p>
                            @if($submission->score !== null)
                                <p class="mt-2">Your Score: <strong>{{ $submission->score }}</strong></p>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>