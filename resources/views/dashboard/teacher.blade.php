<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 h-screen flex flex-col">

    <!-- 1. TOP HEADER -->
    <!-- Matches the blue header from your design -->
    <header class="bg-blue-300 h-16 flex items-center justify-between px-6 shadow-sm flex-shrink-0">
        <!-- Back Icon (Left) -->
        <button class="text-black hover:opacity-70">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </button>

        <!-- User Info (Right) -->
        <div class="text-black text-sm font-medium">
            Teacher: {{$user -> name}}
        </div>
    </header>

    <!-- MAIN LAYOUT WRAPPER -->
    <div class="flex flex-1 overflow-hidden">

        <!-- 2. SIDEBAR (Teacher Specific) -->
        <aside class="w-64 bg-gray-50 flex-shrink-0 border-r border-gray-200 pt-4">
            <nav class="flex flex-col space-y-1">
                <!-- Active Item: DASHBOARD -->
                <a href="#" class="bg-blue-400 text-black px-6 py-3 font-medium text-sm uppercase tracking-wide block">
                    Dashboard
                </a>
                
                <!-- Menu Item: CREATE ASSIGNMENT -->
                <a href="#" class="text-black px-6 py-3 font-medium text-sm uppercase tracking-wide hover:bg-gray-200 block transition-colors">
                    Create Assignment
                </a>

                <!-- Menu Item: VIEW ASSIGNMENT -->
                <a href="#" class="text-black px-6 py-3 font-medium text-sm uppercase tracking-wide hover:bg-gray-200 block transition-colors">
                    View Assignment
                </a>

                <!-- Menu Item: ANNOUNCEMENT -->
                <a href="#" class="text-black px-6 py-3 font-medium text-sm uppercase tracking-wide hover:bg-gray-200 block transition-colors">
                    Announcement
                </a>
            </nav>
        </aside>

        <!-- 3. CONTENT AREA -->
        <main class="flex-1 p-8 overflow-y-auto bg-white">
            
        </main>
    </div>

</body>
</html>