<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Forum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller
{
    use AuthorizesRequests;

    public function store(Request $request, Forum $forum)
    {
        $validated = $request->validate([
            'content' => 'required',
        ]);

        $post = new Post();
        $post->forum_id = $forum->id;
        $post->user_id = Auth::id();
        $post->content = $validated['content'];
        $post->published_at = now();
        $post->save();

        return redirect()->route('forums.show', $forum->id)->with('success', 'Post created successfully');
    }

    public function create(Forum $forum)
    {
        return view('posts.create', compact('forum'));
    }

    public function show(Forum $forum, Post $post)
    {
        $post->load('comments.user');
        return view('posts.show', compact('forum', 'post'));
    }

    public function edit(Forum $forum, Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit', compact('forum', 'post'));
    }

    public function update(Request $request, Forum $forum, Post $post)
    {
        $this->authorize('update', $post);

        $validated = $request->validate([
            'content' => 'required',
        ]);

        $post->content = $validated['content'];
        $post->save();

        return redirect()->route('forums.show', $forum->id)->with('success', 'Post updated successfully');
    }

    public function destroy(Forum $forum, Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();
        return redirect()->route('forums.show', $forum->id)->with('success', 'Post deleted successfully');
    }
}
