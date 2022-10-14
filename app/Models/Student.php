<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'level'
    ];

    public function chapters() {
        return $this->belongsToMany(Chapter::class, 'student_chapter');
    }

    public function course() {
        return $this->belongsToMany(Course::class, 'student_course');
    }
}
