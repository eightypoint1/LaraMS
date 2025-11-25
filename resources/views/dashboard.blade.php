<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 h-screen flex flex-col">

    <header class="bg-blue-200 h-16 flex items-center justify-between px-6 shadow-sm flex-shrink-0">
        <button class="text-black hover:opacity-70">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </button>

        <div class="text-black text-sm font-medium">
            Teacher: {{ $teacherName ?? 'STUDENT_USER' }}
        </div>
    </header>

    <div class="flex flex-1 overflow-hidden">

        <aside class="w-64 bg-gray-100 flex-shrink-0 border-r border-gray-200">
            <nav class="flex flex-col">
                <a href="#" class="bg-blue-400 text-black px-6 py-4 font-medium text-sm uppercase tracking-wide">
                    Dashboard
                </a>
                <a href="#" class="text-black px-6 py-4 font-medium text-sm uppercase tracking-wide hover:bg-gray-200">
                    Assignment
                </a>
            </nav>
        </aside>

        <main class="flex-1 p-10 overflow-y-auto">
            
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl text-black">Notice</h1>
                
                <div class="flex space-x-1">
                    <button class="border border-black px-3 py-1 text-sm hover:bg-gray-100 transition">
                        &lt; Previous
                    </button>
                    <button class="border border-black px-3 py-1 text-sm hover:bg-gray-100 transition">
                        Next&gt;
                    </button>
                </div>
            </div>

            <div class="space-y-4 bg-gray-50 p-4 h-full">

                <div class="border border-black bg-white p-4">
                    <div class="flex justify-between items-start mb-2">
                        <div class="text-sm font-bold space-y-1">
                            <p>Published In: 2025-19-11 07:02:51</p>
                            <p>Published By: USER</p>
                        </div>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                            </svg>
                        </button>
                    </div>

                    <div class="mt-4">
                        <h2 class="text-xl font-bold mb-2 uppercase">CLASS NOTICE</h2>
                        <p class="text-base text-gray-900">
                            i’ve been busy lately, class will start at 9 am
                        </p>
                    </div>
                </div>

                <div class="border border-black bg-white p-4">
                    <div class="flex justify-between items-start">
                        <div class="text-sm font-bold space-y-1">
                            <p>Published In: 2025-19-10 11:22:31</p>
                            <p>Published By: USER</p>
                        </div>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>