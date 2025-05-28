<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    /** @use HasFactory<\Database\Factories\AffiliationFactory> */
    use HasFactory;

    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
