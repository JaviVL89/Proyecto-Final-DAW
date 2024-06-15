<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index(Request $request)
{
    $query = Course::query();

    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->search . '%')
              ->orWhere('description', 'like', '%' . $request->search . '%')
              ->orWhere('category', 'like', '%' . $request->search . '%');
    }

    if ($request->has('categories')) {
        $query->whereIn('category', $request->categories);
    }

    $courses = $query->paginate(8);
    return view('courses.index', compact('courses'));
}


    public function show(Course $course)
    {
        $course->load('contents');
        return view('courses.show', compact('course'));
    }
    

    public function addToMyCourses(Course $course)
    {
        $user = Auth::user();
        $user->courses()->attach($course->id);
        return redirect()->route('courses.index')->with('success', 'Curso añadido a "Mis cursos"');
    }

    public function myCourses()
    {
        $user = Auth::user();
        $courses = $user->courses;
        return view('courses.my-courses', compact('courses'));
    }

    public function removeFromMyCourses(Course $course)
    {
        $user = Auth::user();
        $user->courses()->detach($course->id);
        return redirect()->route('courses.my')->with('success', 'Curso eliminado de "Mis cursos"');
    }
}
