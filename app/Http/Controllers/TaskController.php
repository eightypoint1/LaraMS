<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Murid mengumpulkan tugas (upload file jawaban)
     */
    public function store(Request $request)
    {
        $request->validate([
            'assigment_id' => 'required|exists:assigments,id',
            'file_path' => 'required|file|mimes:pdf,doc,docx,zip,jpg,png|max:5120',
        ]);

        $existingTask = Task::where('user_id', Auth::id())
            ->where('assigment_id', $request->assigment_id)
            ->first();

        if ($existingTask) {
            return redirect()->back()->with('error', 'Anda sudah mengumpulkan tugas ini sebelumnya.');
        }

        $filePath = $request->file('file_path')->store('submissions', 'public');

        // SIMPAN KE DATABASE
        Task::create([
            'user_id' => Auth::id(),
            'assigment_id' => $request->assigment_id,
            'file_path' => $filePath,
            'score' => null,
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil dikumpulkan!');
    }

    /**
     * Guru memberi nilai pada submission murid
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $request->validate([
            'score' => 'required|integer|min:0|max:100',
        ]);

        $task->update([
            'score' => $request->score,
        ]);

        return redirect()->back()->with('success', 'Nilai berhasil disimpan!');
    }
}
