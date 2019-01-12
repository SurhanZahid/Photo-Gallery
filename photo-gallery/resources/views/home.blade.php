@extends('layouts.app')

@section('content')


<div class="index-content container">
        <h1 style="margin-top:100px;" class="text-center">Posts</h1>
        {{-- Messages --}}
        @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{ session()->get('message') }}</strong>
      </div>
    @endif

    @if(session()->has('alert'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{ session()->get('alert') }}</strong>
      </div>
    @endif
    {{-- End Message --}}
    <div class="row">
     {{-- Card --}}
    <div id="products" class="row view-group">
            @foreach ($post as $value)
            <div class="item col-xs-4 col-lg-4">
                <div class="thumbnail card">
                    <div class="img-event">
                        <img class="group list-group-image img-fluid" target="_blank" src="images/post/{{$value->path}}" alt="" />
                    </div>
                    <div class="caption card-body">
                        <h4 class="group card-title inner list-group-item-heading">
                         {{$value->title}}</h4>
                        <p class="group inner list-group-item-text">
                        {{$value->categories}}</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                            <a href="{{asset('images/post/'.$value->path)}}" id="open-img" class="btn btn-primary">View</a>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="float-right" href="{{ route('like',$value->id)}}">
                                     <i class="material-icons">favorite_border</i>{{$value->likes_count}}
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    {{-- End Card --}}
    </div>

    
</div>

@endsection
