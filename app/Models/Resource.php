<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'resource_name','resource_description','resource_file'
    ];

    public function chapter() {
        return $this->belongsTo(Chapter::class);
    }
}
