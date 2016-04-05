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

            @if (Session::has('flash_notification.message'))
                <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{ Session::get('flash_notification.message') }}
                </div>
            @endif



            @foreach($posts->reverse() as $post)


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="/{{ $post->id }}">{{ $post->title  }}</a>
                            <span class="pull-right"><a href="/{{ $post->id }}">{{ $post->created_at->format('m-d-Y')  }}</a></span>
                        </div>

                        <div class="panel-body">

                            {{ $post->body }}


                        </div>
                    </div>



            @endforeach

        </div>






    </div>
</div>
@endsection
