<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

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


   /* public function store(Request $request, Post $post) {

        $this->validate($request, [
            'title' => 'required|min:4|max:140',
            'body' => 'required|min:10'
        ]);

        $comment = new Comment($request->all());

        $post->addComment($comment, 1);
    }



    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required|min:4|max:140',
            'body' => 'required|min:10'
        ]);
        $post = new Post($request->all());
        $post->user_id = $request->user()->id;
        $post->save();

        //session()->flash('flash_message', 'Post Created! Great job.');
        return redirect('/home');
    }*/


    public function store(Request $request, Post $post)
    {
        // validate
        $this->validate($request, [
            'body' => 'required|min:10',
            'title' => 'required|min:4|max:140'
        ]);

        $post->create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => $request->user()->id
        ]);


        return view('home', 'PostController@index');
    }


    public function destroy(Post $post)
    {
        $post->delete();

        if($post->delete()) {
            return Redirect::route('home')->with('message', 'Post deleted.');
        }
        else {
            return Redirect::route('home')->with('message', 'Error.');
        }
    }


   /* public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

    }
*/




}
