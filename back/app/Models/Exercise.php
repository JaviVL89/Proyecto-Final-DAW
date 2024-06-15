<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $table = 'exercises';

    protected $fillable = [
        'lesson_id', 'question', 'answers',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'exercise_id');
    }
}
