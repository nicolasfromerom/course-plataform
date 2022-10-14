<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $with = ['subCategory.category'];

    public function subCategory() {
        return $this->belongsTo(SubCategory::class);
    }

    public function chapters() {
        return $this->hasMany(Chapter::class);
    }

    public function instructor() {
        return $this->belongsTo(Instructor::class);
    }

    public function students() {
        return $this->belongsToMany(Student::class, 'student_course');
    }
}
