<?php

namespace App;

use App\Models\User;

Trait Likeable {
    
    public function like($user = null)
    {
        $user = $user ?: auth()->user();

        return $this->likes()->attach($user);
    }

    public function likes()
    {
        // return $this->belongsToMany(User::class)->withTimestamps();
        return $this->morphToMany(User::class, 'likeable')->withTimestamps();
    }
}