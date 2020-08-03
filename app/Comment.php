<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'description', 'user_id', 'parent_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments_liked()
    {
        return $this->belongsToMany('App\User', 'comment_likes', 'comment_id', 'user_id');
    }

    public function replies()
    {
        return $this->hasMany('App\Comment', 'parent_id', 'id');
    }
}
