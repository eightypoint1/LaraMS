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
            User: Student_User
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
            
        </main>
    </div>

</body>
</html>