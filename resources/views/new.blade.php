@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Post</div>

                <div class="panel-body">



                    <form role="form" id="post-form" class="form-horizontal" method="post" action="add-post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Post Title:</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="post-title" placeholder="Title" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="body">Post Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="body" rows="5" id="post-body" required></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="submit" class="btn btn-primary">Create Post</button>
                            </div>
                        </div>

                    </form>



                </div>
            </div>
            @if (count($errors) > 0)
                    <!-- Form Error List -->
            <div class="alert alert-danger">
                <strong>Whoops! Something went wrong!</strong>

                <br><br>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection
