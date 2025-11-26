<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 h-screen flex flex-col font-[Inter]">

    

        <main class="flex-1 p-8 flex gap-8 bg-white">
            <!-- LEFT: Form -->
            <div class="w-1/2 bg-gray-50 p-8 flex flex-col items-center">
                <h2 class="text-2xl mb-8">Create Announcement</h2>
                <form class="w-full space-y-4">
                    <input type="text" placeholder="Title" class="w-full bg-gray-300 p-3 focus:outline-none">
                    <textarea placeholder="Description" class="w-full bg-gray-300 p-3 h-32 focus:outline-none"></textarea>
                    <button class="w-full bg-blue-300 py-3 mt-4 uppercase font-medium hover:bg-blue-400">POST</button>
                </form>
            </div>

            <!-- RIGHT: History -->
            <div class="w-1/2">
                <div class="flex bg-gray-100 p-3 text-sm font-medium mb-2">
                    <span class="flex-1">History Announcement</span>
                    <span class="w-24 text-center">Date</span>
                    <span class="w-24 text-center">Action</span>
                </div>
                
                <div class="flex items-center bg-gray-50 p-3 border border-gray-100">
                    <span class="flex-1 text-sm">I've been busy lately...</span>
                    <span class="w-24 text-center text-sm bg-blue-200 py-1 mx-2">25/11/19</span>
                    <button class="w-24 text-center text-sm bg-blue-200 hover:bg-blue-300 py-1 uppercase">DELETE</button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>