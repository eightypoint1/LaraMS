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

            <!-- RIGHT PANEL: Dynamic Content -->
            <div class="w-2/3 bg-gray-50 border border-gray-200 p-8 h-full overflow-y-auto">
                
                
                    <!-- VIEW MODE: Grading Table -->
                    <h2 class="text-xl mb-6">View: Example 1 Assignment</h2>
                    <div class="flex justify-between border-b border-gray-300 pb-2 mb-4">
                        <span class="font-medium">Student Name</span>
                        <span class="font-medium mr-12">Marks</span>
                    </div>

                    <!-- Student Row -->
                    <div class="flex justify-between items-center bg-gray-100 p-3 mb-2">
                        <span>Budi Bambang Bernadus</span>
                        <div class="flex items-center space-x-2">
                            <input type="text" value="89" class="w-16 p-1 text-center border border-gray-300 bg-gray-200" readonly>
                            <button class="bg-gray-300 px-3 py-1 text-sm text-gray-600">Edit</button>
                        </div>
                    </div>
                     <!-- Student Row (Empty) -->
                     <div class="flex justify-between items-center bg-gray-100 p-3 mb-8">
                        <span>Siti Aminah</span>
                        <div class="flex items-center space-x-2">
                            <input type="text" placeholder="Input Mark" class="w-24 p-1 text-center border border-gray-300 bg-gray-200">
                            <div class="w-8"></div> <!-- Spacer for alignment -->
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button class="bg-blue-300 px-8 py-2 font-medium hover:bg-blue-400 uppercase">Save</button>
                    </div>

            

        </main>
    </div>
</body>
</html>