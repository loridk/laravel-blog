<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['created_at'];
    protected $fillable = ['body', 'title'];

    public function comments() {

        return $this->hasMany(Comment::class);

    }

    public function addComment(Comment $comment, $userId) {

        $comment->user_id = $userId;
        return $this->comments()->save($comment);

    }


    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
