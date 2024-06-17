<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'description', 'difficulty_level', 'duration', 'image', 'category', 'instructors', 'start_date', 'requirements'
    ];

    public function contents()
    {
        return $this->hasMany(Content::class, 'course_id');
    }
}
