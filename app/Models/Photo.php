<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;


    public function post()
    {
        return $this->belongsTo(Post::class);//, 'post_id'
    }
}