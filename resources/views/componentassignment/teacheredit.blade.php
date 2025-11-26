<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assignment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 h-screen flex flex-col">

    

        <!-- MAIN CONTENT (Split View) -->
        <main class="flex-1 flex p-8 gap-8 overflow-hidden">
            
            <!-- LEFT PANEL: List of Assignments -->
            <div class="w-1/3 bg-gray-50 border border-gray-200 h-full overflow-y-auto">
                <div class="bg-gray-100 p-3 font-medium flex justify-between border-b border-gray-200">
                    <span>Assignment Name</span>
                    <span>Actions</span>
                </div>
                
                <!-- Item 1 -->
                <div class="p-4 border-b border-gray-200 flex justify-between items-center bg-white">
                    <span class="text-sm">Example 1 Assignment</span>
                    <div class="flex space-x-1">
                        <!-- EDIT Link -->
                        <a href="{{ route('teacher.assignments.index', ['id'=>1, 'mode'=>'edit']) }}" class="bg-blue-300 px-3 py-1 text-xs font-medium hover:bg-blue-400">EDIT</a>
                        <!-- VIEW Link -->
                        <a href="{{ route('teacher.assignments.index', ['id'=>1, 'mode'=>'view']) }}" class="bg-blue-300 px-3 py-1 text-xs font-medium hover:bg-blue-400">VIEW</a>
                        <button class="bg-blue-300 px-2 py-1 text-xs font-medium hover:bg-blue-400">DELETE</button>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="p-4 border-b border-gray-200 flex justify-between items-center bg-gray-50">
                    <span class="text-sm">Example 2 Assignment</span>
                    <div class="flex space-x-1">
                        <a href="{{ route('teacher.assignments.index', ['id'=>2, 'mode'=>'edit']) }}" class="bg-blue-300 px-3 py-1 text-xs font-medium hover:bg-blue-400">EDIT</a>
                        <a href="{{ route('teacher.assignments.index', ['id'=>2, 'mode'=>'view']) }}" class="bg-blue-300 px-3 py-1 text-xs font-medium hover:bg-blue-400">VIEW</a>
                        <button class="bg-blue-300 px-2 py-1 text-xs font-medium hover:bg-blue-400">DELETE</button>
                    </div>
                </div>
            </div>

             <!-- EDIT MODE: Assignment Form -->
                    <h2 class="text-xl mb-6 text-center">Edit: Assignment 1</h2>
                    
                    <form class="max-w-md mx-auto space-y-4">
                        <input type="text" value="Example 1 Assignment" class="w-full bg-gray-300 p-3 text-gray-700 focus:outline-none" placeholder="Title">
                        
                        <textarea class="w-full bg-gray-300 p-3 h-24 text-gray-700 focus:outline-none" placeholder="Description">Description content...</textarea>
                        
                        

                        <div class="flex items-center bg-gray-300">
                            <div class="w-1/3 bg-blue-300 p-3 text-center text-sm font-medium">Browse</div>
                            <div class="flex-1 p-3 text-gray-500">No File Selected</div>
                        </div>

                        <button class="w-full bg-blue-300 p-3 font-medium mt-6 hover:bg-blue-400 uppercase">EDIT</button>
                    </form>

        </main>
    </div>
</body>
</html>