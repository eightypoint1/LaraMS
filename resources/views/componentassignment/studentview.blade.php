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

    

    <!-- CONTENT WRAPPER -->
    <!-- Note: Sidebar is removed here to match your 'View Class.png' screenshot, but you can add it back if needed -->
    <main class="flex-1 p-10 overflow-y-auto flex justify-center">
        
        <div class="w-full max-w-4xl border border-black bg-gray-50 p-8 h-fit min-h-[600px] relative">
            
            <!-- Header Info -->
            <div class="mb-10">
                <h1 class="text-xl text-black font-medium">Example 1 Assignment</h1>
                <p class="text-gray-600 text-sm mt-1">Posted in 2025-11-14</p>
            </div>

            <!-- Form Table Layout -->
            <div class="space-y-4 max-w-3xl mx-auto">
                
                

                <!-- Description Row -->
                <div class="flex">
                    <div class="w-32 bg-gray-300 text-gray-500 py-3 px-4 text-sm font-medium flex items-center">
                        Description<br>Assignment
                    </div>
                    <div class="flex-1 bg-gray-200 py-3 px-4 text-black text-sm flex items-center border-l border-white">
                        There are assignments!!! so, this assignment is create database.....
                    </div>
                </div>

                <!-- Browse File Row -->
                <div class="flex mt-8">
                    <label class="w-32 bg-blue-200 hover:bg-blue-300 cursor-pointer text-black py-3 px-4 text-sm font-medium flex items-center justify-center transition-colors">
                        Browse
                        <input type="file" class="hidden" />
                    </label>
                    <div class="flex-1 bg-gray-200 py-3 px-4 text-gray-400 text-sm flex items-center border-l border-white">
                        No File Selected
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center mt-12">
                    <button class="bg-blue-200 hover:bg-blue-300 text-black px-12 py-3 text-sm font-medium uppercase transition-colors shadow-sm">
                        SUBMIT
                    </button>
                </div>

            </div>
        </div>

    </main>
</body>
</html>