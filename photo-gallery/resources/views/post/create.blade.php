@extends('layouts.app')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">×</button>
        {{ session()->get('message') }}
    </div>
@endif
<div style="margin-top:100px;" class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
        </div>
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Create a post</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" placeholder="Title" value="" />
                                    @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control{{ $errors->has('categories') ? ' is-invalid' : '' }}" name="categories" placeholder="Categories" value="" />
                                    @if ($errors->has('categories'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categories') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control{{ $errors->has('path') ? ' is-invalid' : '' }}" name="path" type="file">
                                    @if ($errors->has('path'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('path') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>    
                        </div>
                    </div>
                   
                </div>
            </div>
        </form>
        
    </div>

</div>
@endsection
