<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Likeable;

class Comment extends Model
{
    use HasFactory, Likeable;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
