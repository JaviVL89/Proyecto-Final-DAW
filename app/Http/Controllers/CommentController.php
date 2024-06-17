<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Forum;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Forum $forum, Post $post)
    {
        $validated = $request->validate([
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->post_id = $post->id;
        $comment->user_id = Auth::id();
        $comment->content = $validated['content'];
        $comment->save();

        return redirect()->route('posts.show', ['forum' => $forum->id, 'post' => $post->id])->with('success', 'Comment added successfully');
    }
    public function edit(Forum $forum, Post $post, Comment $comment)
    {
        return view('comments.edit', compact('forum', 'post', 'comment'));
    }
    public function update(Request $request, Forum $forum, Post $post, Comment $comment)
    {
        $validated = $request->validate([
            'content' => 'required',
        ]);

        $comment->content = $validated['content'];
        $comment->save();

        return redirect()->route('posts.show', ['forum' => $forum->id, 'post' => $post->id])->with('success', 'Comment updated successfully');
    }

    public function destroy(Forum $forum, Post $post, Comment $comment)
    {
        $comment->delete();
        return redirect()->route('posts.show', ['forum' => $forum->id, 'post' => $post->id])->with('success', 'Comment deleted successfully');
    }
}
