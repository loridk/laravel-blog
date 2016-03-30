@extends('layouts.app')

@section('content')




    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $post->title  }}
                <br />{{ $post->timestamp  }}
            </div>

            <div class="panel-body">

                {{ $post->content }}


            </div>
        </div>
    </div>

    <hr>

    <a href="/">Back</a>

    <ul>
        @foreach($post->comments as $comment)
            <li>{{ $comment->body }}</li>
            {{--<li>{{ $comment->body }} - By {{ $comment->user->username }}</li>--}}

        @endforeach
    </ul>



    <h3>Add a New Comment</h3>

    <form method="post" action="/posts/{{ $post->id }}/comments">
        <textarea name="body" class="col-md-10 col-md-offset-1"></textarea>
        <br />
        <button type="submit">Add Comment</button>
    </form>




@stop