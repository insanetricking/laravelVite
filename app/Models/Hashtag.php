<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function posts()
    {
        return $this->belongsToMany(Post::class,'hashtag_post', 'hashtag_id', 'post_id');
    }
}
