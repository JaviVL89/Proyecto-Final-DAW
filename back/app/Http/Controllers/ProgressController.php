<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;

class ProgressController extends Controller
{
    public function index()
    {
        $progresses = Progress::all();
        return view('progresses.index', compact('progresses'));
    }

    public function create()
    {
        return view('progresses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
            'status' => 'required',
        ]);

        $progress = Progress::create($validated);
        return redirect()->route('progresses.index')->with('success', 'Progress created successfully');
    }

    public function show(Progress $progress)
    {
        return view('progresses.show', compact('progress'));
    }

    public function edit(Progress $progress)
    {
        return view('progresses.edit', compact('progress'));
    }

    public function update(Request $request, Progress $progress)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
            'status' => 'required',
        ]);

        $progress->update($validated);
        return redirect()->route('progresses.index')->with('success', 'Progress updated successfully');
    }

    public function destroy(Progress $progress)
    {
        $progress->delete();
        return redirect()->route('progresses.index')->with('success', 'Progress deleted successfully');
    }
}
