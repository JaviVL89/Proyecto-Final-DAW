<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Content;

class ContentController extends Controller
{
    public function index(Course $course)
    {
        $contents = $course->contents;
        return view('courses.contents', compact('course', 'contents'));
    }

    public function show(Course $course, Content $content)
{
    return view('courses.contents', compact('course', 'content'));
}


    public function download(Course $course, Content $content)
    {
        $filePath = public_path($content->file_path);
        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return redirect()->back()->with('error', 'El archivo no existe.');
        }
    }
    
}
