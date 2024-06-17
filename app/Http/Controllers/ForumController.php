<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ForumController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $forums = Forum::with('posts', 'categories', 'tags')->get();
        return view('forums.index', compact('forums'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('forums.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'categories' => 'array',
            'tags' => 'array',
        ]);

        $forum = new Forum($validated);
        $forum->user_id = Auth::id();
        $forum->save();
        $forum->categories()->sync($request->categories);
        $forum->tags()->sync($request->tags);

        return redirect()->route('forums.index')->with('success', 'Foro creado correctamente');
    }

    public function show(Forum $forum)
    {
        return view('forums.show', compact('forum'));
    }

    public function edit(Forum $forum)
    {
        $this->authorize('update', $forum);

        $categories = Category::all();
        $tags = Tag::all();
        return view('forums.edit', compact('forum', 'categories', 'tags'));
    }

    public function update(Request $request, Forum $forum)
    {
        $this->authorize('update', $forum);

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'categories' => 'array',
            'tags' => 'array',
        ]);

        $forum->update($validated);
        $forum->categories()->sync($request->categories);
        $forum->tags()->sync($request->tags);

        return redirect()->route('forums.index')->with('success', 'Foro actualizado correctamente');
    }

    public function destroy(Forum $forum)
    {
        $this->authorize('delete', $forum);

        $forum->delete();
        return redirect()->route('forums.index')->with('success', 'Foro eliminado correctamente');
    }
}
