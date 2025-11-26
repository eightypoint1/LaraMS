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

    <!-- HEADER -->
    <header class="bg-blue-300 h-16 flex items-center justify-between px-6 shadow-sm flex-shrink-0">
        <button onclick="history.back()" class="text-black hover:opacity-70">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
        </button>
        <div class="text-black text-sm font-medium">Teacher: USER</div>
    </header>

    <div class="flex flex-1 overflow-hidden">
        <!-- SIDEBAR -->
        <aside class="w-64 bg-gray-50 flex-shrink-0 border-r border-gray-200 pt-4">
            <nav class="flex flex-col">
                <a href="/dashboard" class="text-black px-6 py-3 font-medium text-sm uppercase hover:bg-gray-200">Dashboard</a>
                <a href="{{ route('teacher.assignments.create') }}" class="text-black px-6 py-3 font-medium text-sm uppercase hover:bg-gray-200">Create Assignment</a>
                <!-- Active State -->
                <a href="#" class="bg-blue-400 text-black px-6 py-3 font-medium text-sm uppercase">View Assignment</a>
                <a href="{{ route('teacher.announcements.index') }}" class="text-black px-6 py-3 font-medium text-sm uppercase hover:bg-gray-200">Announcement</a>
            </nav>
        </aside>

        <!-- MAIN CONTENT (Split View) -->
        <main class="flex-1 flex p-8 gap-8 overflow-hidden">
            
          

        </main>
    </div>
</body>
</html>