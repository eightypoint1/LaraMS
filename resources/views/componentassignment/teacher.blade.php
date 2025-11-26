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

            

        </main>
    </div>
</body>
</html>