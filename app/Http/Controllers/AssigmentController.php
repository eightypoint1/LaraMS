<?php

namespace App\Http\Controllers;

use App\Models\Assigment;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AssigmentController extends Controller
{
    /**
     * Menampilkan detail tugas beserta submission murid (untuk guru)
     */
    public function show($id)
    {
        $assignment = Assigment::findOrFail($id);

        $user = Auth::user();
        $submissions = null;

        // Cek apakah user adalah guru
        if ($user->role === 'teacher') {
            $submissions = Task::with('user')
                ->where('assigment_id', $id)
                ->latest()
                ->get();
        }

        return view('assignments.show', [
            'assignment' => $assignment,
            'submissions' => $submissions,
        ]);
    }

    /**
     * Menyimpan tugas baru yang dibuat guru
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file_path' => 'nullable|file|mimes:pdf,doc,docx,zip,png,jpg|max:2048',
        ]);

        // HANDLE FILE UPLOAD
        $filePath = null;
        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('assignments', 'public');
        }

        // SIMPAN KE DATABASE
        Assigment::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Tugas baru berhasil dibuat!');
    }

    /**
     * Mengupdate tugas yang sudah ada
     */
    public function update(Request $request, $id)
    {
        $assignment = Assigment::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file_path' => 'nullable|file|mimes:pdf,doc,docx,zip,png,jpg|max:2048',
        ]);

        $assignment->title = $request->title;
        $assignment->description = $request->description;

        if ($request->hasFile('file_path')) {
            if ($assignment->file_path) {
                Storage::disk('public')->delete($assignment->file_path);
            }
            $assignment->file_path = $request->file('file_path')->store('assignments', 'public');
        }

        $assignment->save();

        return redirect()->back()->with('success', 'Tugas berhasil diperbarui!');
    }

    /**
     * Menghapus tugas dari database
     */
    public function destroy($id)
    {
        $assignment = Assigment::findOrFail($id);

        if ($assignment->file_path) {
            Storage::disk('public')->delete($assignment->file_path);
        }

        // HAPUS DARI DATABASE
        $assignment->delete();

        return redirect()->back()->with('success', 'Tugas berhasil dihapus!');
    }
}
