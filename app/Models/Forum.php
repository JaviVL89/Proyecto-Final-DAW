<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';

    protected $fillable = [
        'title', 'description',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'forum_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_forum', 'forum_id', 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'forum_tag', 'forum_id', 'tag_id');
    }
}
