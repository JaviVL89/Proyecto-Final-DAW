<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        return view('exercises.index', compact('exercises'));
    }

    public function create()
    {
        return view('exercises.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answers' => 'required|array|min:1',
            'lesson_id' => 'required|exists:lessons,id',
        ]);

        $exercise = Exercise::create($validated);
        return redirect()->route('exercises.index')->with('success', 'Exercise created successfully');
    }

    public function show(Exercise $exercise)
    {
        return view('exercises.show', compact('exercise'));
    }

    public function edit(Exercise $exercise)
    {
        return view('exercises.edit', compact('exercise'));
    }

    public function update(Request $request, Exercise $exercise)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answers' => 'required|array|min:1',
            'lesson_id' => 'required|exists:lessons,id',
        ]);

        $exercise->update($validated);
        return redirect()->route('exercises.index')->with('success', 'Exercise updated successfully');
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();
        return redirect()->route('exercises.index')->with('success', 'Exercise deleted successfully');
    }
}
