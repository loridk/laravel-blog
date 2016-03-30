@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Post</div>

                <div class="panel-body">


                    <form role="form" id="post-form" class="form-horizontal" method="post" action="/posts">

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="post-title">Post Title:</label>
                            <div class="col-sm-10">
                                <input type="text" name="post-title" class="form-control" id="post-title" placeholder="Title" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="post-content">Post Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="post-content" rows="5" id="post-content" required></textarea>
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
        </div>
    </div>
</div>
@endsection
