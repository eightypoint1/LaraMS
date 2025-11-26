<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
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
            return redirect()->back()->with('error', 'Already submitted!');
        }

        $filePath = $request->file('file_path')->store('submissions', 'public');

        Task::create([
            'user_id' => Auth::id(),
            'assigment_id' => $request->assigment_id,
            'file_path' => $filePath,
            'score' => null,
        ]);

        return redirect()->route('assignments.index')->with('success', 'Submission successful!');
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $request->validate([
            'score' => 'required|integer|min:0|max:100',
        ]);

        $task->update(['score' => $request->score]);

        return redirect()->back()->with('success', 'Score saved!');
    }
}