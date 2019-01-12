@extends('layouts.app')

@section('content')
<div class="container">

  <h1 style="margin-top:100px;" class="text-center">Your Post</h1>

{{-- Card --}}
<div id="products" class="row view-group">
    @foreach ($post as $value)
    @if ($value->user_id == Auth::user()->id)
  <div class="item col-xs-4 col-lg-4">
      <div class="thumbnail card">
          <div class="img-event">
              <img class="group list-group-image img-fluid" src="images/post/{{$value->path}}" alt="" />
          </div>
          <div class="caption card-body">
              <h4 class="group card-title inner list-group-item-heading">
                  {{$value->title}}</h4>
              <p class="group inner list-group-item-text">
                  {{$value->categories}}</p>
              <div class="row">
                  <div class="col-xs-12 col-md-6">
                      <a class="btn btn-primary" target="_blank" href="{{asset('images/post/'.$value->path)}}">
                          View
                      </a>
                  </div>
                  <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="{{ route('update-form',$value->id)}}">
                          Edit
                      </a>
                      <a class="btn btn-danger" href="{{ route('delete',$value->id)}}">
                          Delete
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @else
        <center><h1 class="text-center">You Have No Post</h1></center>
    @endif
    @endforeach
</div>
{{-- End Card --}}
</div>
@endsection