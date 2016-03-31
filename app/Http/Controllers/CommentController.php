<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Post $post) {

        // validate

        $this->validate($request, [
            'body' => 'required|min:10'
        ]);

        $comment = new Comment($request->all());

        $post->addComment($comment, 1);

        return back();
    }
}
