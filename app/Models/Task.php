<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /*
     リレーションの記載
    */

    // Userとのリレーション
     public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Commentとのリレーション
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    // Bookmarkとのリレーション
    public function bookmarks()
    {
        return $this->hasMany('App\Bookmark');
    }
}
