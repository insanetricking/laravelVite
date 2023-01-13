<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function owner()
    {

        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'post_id');
    }

    public function hashtags()
    {
        return $this->belongsToMany(Hashtag::class, 'hashtag_post', 'post_id', 'hashtag_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
