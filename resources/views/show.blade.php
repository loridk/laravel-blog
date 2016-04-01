@extends('layouts.app')

@section('content')




    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $post->title  }}

                @if (Auth::user())
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs">Edit</button>
                        <div class="pull-left">
                       {{ Form::open(['method' => 'DELETE', 'route' => ['delete']]) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-primary btn-xs']) }}
                        {{ Form::close() }}
                            </div>
                    </div>
                @endif
                <br />{{ $post->created_at->format('m-d-Y')  }}

            </div>

            <div class="panel-body">

                {{ $post->content }}


            </div>
            <div class="panel-footer">
                Post By: {{ $post->user->name }}
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
                        <li>{{ $comment->body }} - {{ $comment->user->name  }}</li>
                    <hr />
                    {{--<li>{{ $comment->body }} - By {{ $comment->user->username }}</li>--}}

                @endforeach
            </ul>


        @if (Auth::user())

        <div class="panel panel-default">
            <div class="panel-heading">
                Add a New Comment
            </div>

            <div class="panel-body">
                <form method="post" action="/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <textarea name="body" class="col-md-10 col-md-offset-1">{{ old('body') }}</textarea>

                    <div class="col-md-3 col-md-offset-4" style="margin-top: 5%">
                        <button class="btn btn-primary" type="submit">Add Comment</button>
                    </div>
                </form>

                @endif


            </div>
        </div>
    </div>







@stop