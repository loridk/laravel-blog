<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.new');
    }

    public function store(Request $request, Post $post)
    {

        // validate

        $this->validate($request, [
            'body' => 'required|min:10',
            'title' => 'required|min:10'
        ]);

        $post->create([
            'title' => $request->title,
            'body' => $request->body
        ]);


        return back();
    }


    public function index()
    {

        $posts = Post::all();

        return view('home', compact('posts'));
    }

    public function show(Post $post)
    {


//        $post->load('comments.user');

        return view('posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

    }
}
