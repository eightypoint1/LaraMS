<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Assignment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 h-screen flex flex-col font-[Inter]">

    

        <main class="flex-1 flex justify-center items-center p-10 bg-white">
            <div class="bg-gray-50 p-10 w-full max-w-2xl text-center shadow-sm">
                <h1 class="text-3xl mb-10 text-black">Create Assignment</h1>
                
                <form class="space-y-5">
                    <input type="text" placeholder="Title" class="w-full bg-gray-300 p-3 placeholder-gray-500 focus:outline-none">
                    <textarea placeholder="Description" class="w-full bg-gray-300 p-3 h-24 placeholder-gray-500 focus:outline-none"></textarea>
                    
                    

                    <div class="flex">
                        <span class="bg-blue-300 w-40 p-3 text-sm flex items-center justify-center">Browse</span>
                        <input type="text" placeholder="No File Selected" class="bg-gray-300 flex-1 p-3 placeholder-gray-500 focus:outline-none" readonly>
                    </div>

                    <button class="w-1/2 bg-blue-300 py-3 mt-6 font-medium hover:bg-blue-400 uppercase">CREATE</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>