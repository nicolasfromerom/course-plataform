<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','video_url','order'
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function notes() {
        return $this->hasMany(Note::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function resources() {
        return $this->hasMany(Resource::class);
    }

    public function student() {
        return $this->belongsToMany(Role::class, 'student_chapter');
    }

}
