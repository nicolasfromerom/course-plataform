<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment'
    ];

    public function chapter() {
        return $this->belongsTo(Chapter::class);
    }

    public function answer() {
        return $this->hasMany(Answer::class);
    }

    public function author() {
        return $this->belongsTo(User::class);
    }
}
