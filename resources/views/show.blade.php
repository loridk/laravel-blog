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

    <div class="clearfix"></div>

    <hr>







    <div class="col-md-4 col-md-offset-4">

        <div class="text-center">
            <a href="/"><button type="button" class="btn btn-default">Back</button></a>
        </div>

            <ul class="list-unstyled">
                @foreach($post->comments as $comment)
                    <hr />
                        <li>{{ $comment->body }}</li>
                    <hr />
                    {{--<li>{{ $comment->body }} - By {{ $comment->user->username }}</li>--}}

                @endforeach
            </ul>




        <div class="panel panel-default">
            <div class="panel-heading">
                Add a New Comment
            </div>

            <div class="panel-body">

                <form method="post" action="/{{ $post->id }}/comments">
                    <textarea name="body" class="col-md-10 col-md-offset-1"></textarea>

                    <div class="col-md-3 col-md-offset-4" style="margin-top: 5%">
                        <button class="btn btn-primary" type="submit">Add Comment</button>
                    </div>
                </form>


            </div>
        </div>
    </div>







@stop