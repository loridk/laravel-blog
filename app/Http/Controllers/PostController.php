<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

use App\Http\Requests;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->load('comments.user');
        return view('show', compact('post'));
    }

    public function create()
    {
        return view('new');
    }


    /*public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:4|max:140',
            'body' => 'required|min:10'
        ]);
        $post = new Post($request->all());
        $post->user_id = $request->user()->id;
        $post->save();

        //session()->flash('flash_message', 'Post Created! Great job.');
        return redirect('/');
    }*/


    /*public function store(Request $request, Post $post)
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


        return view('home', 'PostController@index');
    }*/





   /* public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

    }

     public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('flash_message', 'Post Archived!');
        return redirect('/');
    }


   */
}
