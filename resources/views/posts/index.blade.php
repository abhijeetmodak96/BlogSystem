@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3 class="text-aligned-center">Posts</h3></div>
                <div class="card-body">
                    @if(count($posts)>0)
                        @foreach($posts as $post)
                            <div class="well">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img style="max-width:100%;height:auto;" src="/storage/cover_images/{{$post->cover_image}}">
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-6">
                                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                    </div>
                                </div>
                            </div>
                            <br><div class="card"></div><br>
                        @endforeach
                    @else
                        <p>No posts found</p>

                    @endif

                </div>
            </div>
        </div>
    </div>  
</div>          
    
@endsection