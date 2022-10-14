<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment'
    ];

    public function comment() {
        return $this->belongsTo(Comment::class);
    }

    public function author() {
        return $this->belongsTo(User::class);
    }
}
