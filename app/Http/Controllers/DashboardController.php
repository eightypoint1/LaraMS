<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Announcement;
use App\Models\Assigment;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard sesuai role pengguna
     */
    public function index()
    {
        $user = Auth::user();

        // Percabangan berdasarkan role user
        if ($user->role === 'teacher') {
            $announcements = Announcement::latest()->get();

            $assignments = Assigment::latest()->get();

            $submissions = Task::with(['user', 'assigment'])->latest()->get();

            // Mengirim data ke view dashboard guru
            return view('dashboard.teacher', [
                'announcements' => $announcements,
                'assignments' => $assignments,
                'submissions' => $submissions
            ]);
        } else {
            $announcements = Announcement::latest()->get();

            $assignments = Assigment::latest()->get();

            $myTasks = Task::where('user_id', $user->id)
                ->pluck('assigment_id')
                ->toArray();

            // Mengirim data ke view dashboard murid
            return view('dashboard.student', [
                'announcements' => $announcements,
                'assignments' => $assignments,
                'submitted_assignment_ids' => $myTasks
            ]);
        }
    }
}
