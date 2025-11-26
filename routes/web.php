<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// Teacher Dashboard Route
Route::get('/dashboard/teacher', function () {
    return view('dashboard.teacher');
})->middleware(['auth', 'teacher'])->name('teacher.dashboard');

// Student Dashboard Route
Route::get('/dashboard/student', function () {
    return view('dashboard.student');
})->middleware(['auth', 'student'])->name('student.dashboard');

// Profile routes (accessible by authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes with guest middleware
Route::middleware('guest.role')->group(function () {
    require __DIR__.'/auth.php';
});

require __DIR__.'/auth.php';
