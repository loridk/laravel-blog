<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Validator;

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


   public function store(Request $request) {



       $validator = Validator::make($request->all(), [
           'title' => 'required|min:4|max:140',
           'body' => 'required|min:10'
       ]);

       if ($validator->fails()) {
           return redirect('/')
               ->withInput()
               ->withErrors($validator);
       }

       $post = new Post($request->all());
       $post->title = $request->title;
       $post->body = $request->body;
       $post->user_id = $request->user()->id;
       $post->save();

       //return $request->all();

       return redirect('/');

    }

    public function destroy(Post $post)
    {
        $post-> delete();

        if($post->delete()) {
            return redirect('/');
        }
        else {
            return "Error";
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
