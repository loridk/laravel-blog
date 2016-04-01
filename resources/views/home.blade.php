@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">


        <div class="col-md-2 hidden-xs">
            <h4>Recent Posts</h4>

            @foreach ($posts->reverse()->slice(0, 5) as $post)

                <p><a href="/{{ $post->id }}">{{ $post->title  }}</a></p>

            @endforeach


        </div>

        <div class="col-md-8">

            @foreach($posts->reverse() as $post)


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="/{{ $post->id }}">{{ $post->title  }}</a>
                            <span class="pull-right"><a href="/{{ $post->id }}">{{ $post->created_at->format('m-d-Y')  }}</a></span>
                        </div>

                        <div class="panel-body">

                            {{ $post->content }}


                        </div>
                    </div>



            @endforeach

        </div>






    </div>
</div>
@endsection
