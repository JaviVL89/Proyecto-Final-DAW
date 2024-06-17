<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $tag = Tag::create($validated);
        return redirect()->route('tags.index')->with('success', 'Tag created successfully');
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $tag->update($validated);
        return redirect()->route('tags.index')->with('success', 'Tag updated successfully');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index')->with('success', 'Tag deleted successfully');
    }
}
