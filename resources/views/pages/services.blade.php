@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                            <div class="card-header">
                                    <h1 class="row justify-content-center">{{$title}}</h1>
                            </div>
                            <div class="card-body">
                                @if(count($services)>0)
                                    <ul class="list-group">
                                        @foreach($services as $service)
                                            <li class="list-group-item">{{$service}}</li>
                                        @endforeach
                                    </ul>

                                @endif
                    </div>   
            </div>  
    </div> 
  </div>    
    
@endsection