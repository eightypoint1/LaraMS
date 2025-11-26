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

    <header class="bg-blue-300 h-16 flex items-center justify-between px-6 shadow-sm">
        <button onclick="history.back()" class="text-black"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
        <div class="font-medium">Teacher: USER</div>
    </header>

    <div class="flex flex-1 overflow-hidden">
        <aside class="w-64 bg-gray-50 border-r border-gray-200 pt-4">
            <nav class="flex flex-col">
                <a href="/dashboard" class="px-6 py-3 font-medium text-sm uppercase hover:bg-gray-200">Dashboard</a>
                <a href="#" class="bg-blue-400 px-6 py-3 font-medium text-sm uppercase">Create Assignment</a>
                <a href="{{ route('teacher.assignments.index') }}" class="px-6 py-3 font-medium text-sm uppercase hover:bg-gray-200">View Assignment</a>
                <a href="{{ route('teacher.announcements.index') }}" class="px-6 py-3 font-medium text-sm uppercase hover:bg-gray-200">Announcement</a>
            </nav>
        </aside>

        <main class="flex-1 flex justify-center items-center p-10 bg-white">
            
        </main>
    </div>
</body>
</html>