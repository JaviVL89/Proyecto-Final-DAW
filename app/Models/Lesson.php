<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';

    protected $fillable = [
        'course_id', 'title', 'content',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class, 'lesson_id');
    }
}
