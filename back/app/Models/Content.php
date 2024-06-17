<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    protected $fillable = [
        'course_id', 'title', 'description', 'file_path', 'type'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
