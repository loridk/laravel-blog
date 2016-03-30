@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            @foreach($posts as $post)

                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="/posts/{{ $post->id }}">{{ $post->title  }}</a>
                            <a href="/posts/{{ $post->id }}">{{ $post->timestamp  }}</a>
                        </div>

                        <div class="panel-body">

                            {{ $post->content }}


                        </div>
                    </div>
                </div>


            @endforeach








    </div>
</div>
@endsection
