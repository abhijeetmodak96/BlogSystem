@extends('layouts.app')

@section('content')

<a href="/posts/{{$post->id}}" class="btn btn-secondary">Go Back</a>
    <h3>Add Comment</h3>
    {!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('comment', 'Comment')}}
            {{Form::text('comment', '', ['class' => 'form-control', 'placeholder' => 'Comment'])}}
        </div>
       
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    

@endsection