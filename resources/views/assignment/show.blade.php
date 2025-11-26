<!DOCTYPE html>
<html lang="en"></html>
<!-- CONTENT -->
        <main class="flex-1 p-8 overflow-y-auto bg-white">
            
            <!-- Loop this block for each assignment -->
            <div class="space-y-4">
                
                <!-- Assignment Card 1 -->
                <div class="border border-black p-4 flex justify-between items-center bg-gray-50">
                    <div>
                        <h3 class="font-normal text-black text-lg">New Assignment: Example 2 Assignment</h3>
                        <p class="text-gray-600 text-sm mt-1">Posted in 2025-11-21</p>
                    </div>
                    <!-- The VIEW button links to the specific assignment -->
                    <a href="{{ route('assignments.show', ['id' => 1]) }}" class="bg-blue-200 hover:bg-blue-300 text-black px-8 py-2 text-sm font-medium uppercase transition-colors">
                        VIEW
                    </a>
                </div>

                <!-- Assignment Card 2 (Static Example) -->
                <div class="border border-black p-4 flex justify-between items-center bg-gray-50">
                    <div>
                        <h3 class="font-normal text-black text-lg">New Assignment: Example 2 Assignment</h3>
                        <p class="text-gray-600 text-sm mt-1">Posted in 2025-11-21</p>
                    </div>
                    <a href="{{ route('assignments.show', ['id' => 2]) }}" class="bg-blue-200 hover:bg-blue-300 text-black px-8 py-2 text-sm font-medium uppercase transition-colors">
                        VIEW
                    </a>
                </div>

            </div>
        </main>

</html>