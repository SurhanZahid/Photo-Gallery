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
                                    <input type="text" class="form-control" name="title" placeholder="Title" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="categories" placeholder="Categories" value="" />
                                </div>
                                <div class="form-group">
                                    <input name="path" type="file">
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
