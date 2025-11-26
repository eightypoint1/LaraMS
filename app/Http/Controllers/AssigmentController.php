<?php

namespace App\Http\Controllers;

use App\Models\Assigment;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AssigmentController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'teacher') {
            $assignments = Assigment::where('user_id', Auth::id())->latest()->get();
            return view('assignments.teacher-index', compact('assignments'));
        }
        
        $assignments = Assigment::with('user')->latest()->get();
        return view('assignments.student-index', compact('assignments'));
    }

    public function create()
    {
        return view('assignments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file_path' => 'nullable|file|mimes:pdf,doc,docx,zip,png,jpg|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('assignments', 'public');
        }

        Assigment::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $filePath,
        ]);

        return redirect()->route('assignments.index')->with('success', 'Assignment created!');
    }

    public function show($id)
    {
        $assignment = Assigment::findOrFail($id);

        if (Auth::user()->role === 'teacher') {
            if ($assignment->user_id !== Auth::id()) {
                abort(403);
            }
            
            $submissions = Task::with('user')->where('assigment_id', $id)->latest()->get();
            return view('assignments.teacher-show', compact('assignment', 'submissions'));
        }

        $submission = Task::where('assigment_id', $id)->where('user_id', Auth::id())->first();
        return view('assignments.student-show', compact('assignment', 'submission'));
    }

    public function edit($id)
    {
        $assignment = Assigment::findOrFail($id);
        
        if ($assignment->user_id !== Auth::id()) {
            abort(403);
        }

        return view('assignments.edit', compact('assignment'));
    }

    public function update(Request $request, $id)
    {
        $assignment = Assigment::findOrFail($id);

        if ($assignment->user_id !== Auth::id()) {
            abort(403);
        }

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

        return redirect()->route('assignments.index')->with('success', 'Assignment updated!');
    }

    public function destroy($id)
    {
        $assignment = Assigment::findOrFail($id);

        if ($assignment->user_id !== Auth::id()) {
            abort(403);
        }

        if ($assignment->file_path) {
            Storage::disk('public')->delete($assignment->file_path);
        }

        $assignment->delete();

        return redirect()->route('assignments.index')->with('success', 'Assignment deleted!');
    }
}