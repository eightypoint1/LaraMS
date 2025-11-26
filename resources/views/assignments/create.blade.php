<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Assignment
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <h1 class="text-2xl font-bold mb-8 text-center">Create Assignment</h1>

                    <form action="{{ route('assignments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="text" name="title" placeholder="Title" 
                               class="w-full bg-gray-200 px-4 py-3 mb-4 rounded border-0" required>

                        <textarea name="description" placeholder="Description" rows="4"
                                  class="w-full bg-gray-200 px-4 py-3 mb-4 rounded border-0" required></textarea>

                        <div class="flex gap-2 mb-8">
                            <label for="file_path" class="bg-blue-200 hover:bg-blue-300 px-6 py-2 rounded cursor-pointer text-sm font-medium">
                                Browse
                            </label>
                            <input type="file" id="file_path" name="file_path" class="hidden" onchange="document.getElementById('file-name').textContent = this.files[0]?.name || 'No File Selected'">
                            <span id="file-name" class="bg-gray-100 px-4 py-2 flex-1 text-sm text-gray-500">No File Selected</span>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="bg-blue-200 hover:bg-blue-300 px-24 py-2 rounded text-sm font-medium">
                                CREATE
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>