@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>{{$post->title}}</h1>
            <img style="width:100% size:100px"  src="/storage/cover_images/{{$post->cover_image}}">
            <br><br>
            <div>
                {!!$post->body!!}
            </div>
            <hr>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            <hr>
            <h3> STATUS: {{$post->status}} </h3>
            <br>
            <div class="row">
                <div class="col-md-4"><a href="/posts" class="btn btn-info">Go Back</a></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"><a href="/posts/{{$post->id}}/comment" class="btn btn-info">Add Comment</a></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row align-items-end"> <br><br><br> </div>
            <div class="row"> <br> <br></div>


            @if(!auth::guest())
                @if(auth::user()->id==$post->user_id)
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a></div>
                        <div class="col-md-4"></div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete Post', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    
                @endif    
            @endif
        </div>    
    </div>
    <div class="row">
        <h3>Add Comment</h3>
        {!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('comment', 'Comment')}}
                {{Form::text('comment', '', ['class' => 'form-control', 'placeholder' => 'Comment'])}}
            </div>
        
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
    
    

</div>

@endsection