
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
                    <h1 class="display-4 text-info">{{ $home_title }}</h1>
                    <small><p class="text-dark text-muted">{{ $category_display }}</p></small>
                    <p class="fs-5">{{ $description }}</p>
                    <a href="/posts" class="btn btn-info text-white mt-5">Start reading</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
 