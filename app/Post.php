<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    protected $fillable = ['body', 'title'];

    public function comments() {

        return $this->hasMany(Comment::class);

    }

    public function addComment(Comment $comment, $userId) {

        $comment->user_id = $userId;
        return $this->comments()->save($comment);

    }
}
