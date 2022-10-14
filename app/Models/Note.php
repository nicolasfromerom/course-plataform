<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'notes'
    ];

    public function chapter() {
        return $this->belongsTo(Chapter::class);
    }

}
