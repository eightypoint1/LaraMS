<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AssigmentController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/teacher', function () {
    return view('dashboard.teacher');
})->middleware(['auth', 'teacher'])->name('teacher.dashboard');

Route::get('/dashboard/student', function () {
    return view('dashboard.student');
})->middleware(['auth', 'student'])->name('student.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/assignments', [AssigmentController::class, 'index'])->name('assignments.index');
    Route::get('/assignments/{id}', [AssigmentController::class, 'show'])->name('assignments.show');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
});

Route::middleware(['auth', 'teacher'])->group(function () {
    Route::get('/assignments/create/new', [AssigmentController::class, 'create'])->name('assignments.create');
    Route::post('/assignments', [AssigmentController::class, 'store'])->name('assignments.store');
    Route::get('/assignments/{id}/edit', [AssigmentController::class, 'edit'])->name('assignments.edit');
    Route::put('/assignments/{id}', [AssigmentController::class, 'update'])->name('assignments.update');
    Route::delete('/assignments/{id}', [AssigmentController::class, 'destroy'])->name('assignments.destroy');
    Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest.role')->group(function () {
    require __DIR__.'/auth.php';
});