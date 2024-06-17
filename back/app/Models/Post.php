<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'forum_id', 'user_id', 'content', 'published_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'forum_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
