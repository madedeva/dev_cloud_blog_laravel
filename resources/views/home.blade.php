
@extends('layouts.main')

@section('container')
<div class="jumbotron jumbotron-fluid">
    <div class="container pt-5">
        <div class="row mt-5">
            <div class="row justify-content-center">
                <div class="col-md-5 text-justify">
                    <img src="img/{{ $image_landing }}" width="75%">
                </div>
                <div class="col-md-5 text-justify">
                    <h1 class="home-title display-3 font-weight-bold">{{ $home_title }}</h1>
                    <small><p class="text-dark text-muted">{{ $category_display }}</p></small>
                    <small><p class="fs-6 pt-3">{{ $description }}</p></small>
                    <a href="/posts" class="btn btn-info text-white mt-4">Start reading</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 