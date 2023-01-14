<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $guarded = [];



    protected $hidden = [
        'password',

    ];

    public function information()
    {
        return $this->hasOne(UserInformation::class); //, 'user_id', 'id'

    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'owner_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function following()
    {
        return $this->belongsToMany(__CLASS__, 'followers', 'user_id', 'author_id');
    }

    public function followers()
    {
        return $this->belongsToMany(__CLASS__, 'followers', 'author_id', 'user_id');

    }

    public function likes()
    {
        return $this->belongsToMany(Post::class, 'likes', 'user_id', 'post_id');

    }
}
