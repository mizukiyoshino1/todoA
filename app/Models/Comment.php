<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
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

    // Taskとのリレーション
    public function task()
    {
        return $this->belongsTo('App\Task');
    }

}
