<?php

// filepath: routes/web.php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AssigmentController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
GURU (Teacher)
*/
Route::middleware(['auth', 'teacher'])->prefix('teacher')->name('teacher.')->group(function () {
    
    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    
    // PENGUMUMAN (Announcements)
    Route::prefix('announcements')->name('announcements.')->group(function () {
        
        // Halaman form & daftar pengumuman
        Route::get('/', function () {
            return view('teacher.announcement.index');
        })->name('index');
        
        // Simpan pengumuman baru
        Route::post('/', [AnnouncementController::class, 'store'])
            ->name('store');
        
        // Update pengumuman
        Route::put('/{id}', [AnnouncementController::class, 'update'])
            ->name('update');
        
        // Hapus pengumuman
        Route::delete('/{id}', [AnnouncementController::class, 'destroy'])
            ->name('destroy');
    });
    
    // TUGAS
    Route::prefix('assignments')->name('assignments.')->group(function () {
        
        // Halaman daftar semua tugas
        Route::get('/', function () {
            return view('teacher.view assignmennt.index');
        })->name('index');
        
        // Halaman form buat tugas baru
        Route::get('/create', function () {
            return view('teacher.create assignment.index');
        })->name('create');
        
        // Simpan tugas baru
        Route::post('/', [AssigmentController::class, 'store'])
            ->name('store');
        
        // Lihat detail tugas & submission murid
        Route::get('/{id}', [AssigmentController::class, 'show'])
            ->name('show');
        
        // Update tugas
        Route::put('/{id}', [AssigmentController::class, 'update'])
            ->name('update');
        
        // Hapus tugas
        Route::delete('/{id}', [AssigmentController::class, 'destroy'])
            ->name('destroy');
    });
    
    // Memberi nilai pada submission murid
    Route::put('/tasks/{id}/score', [TaskController::class, 'update'])
        ->name('tasks.score');
});

/*
MURID (Student)
*/
Route::middleware(['auth', 'student'])->prefix('student')->name('student.')->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    
    Route::prefix('assignments')->name('assignments.')->group(function () {
        
        // Lihat detail tugas (untuk student)
        Route::get('/{id}', [AssigmentController::class, 'show'])
            ->name('show');
    });
    
    // Mengumpulkan tugas
    Route::post('/tasks', [TaskController::class, 'store'])
        ->name('tasks.store');
});

/*
PROFILE (Semua User)
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';