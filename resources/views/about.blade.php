@extends('layouts.main')

@section('container')

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center pt-5">
        <img src="img/{{ $image }}" class="rounded-circle alt="{{ $name }}" width="200">
        <h1>{{ $name }}</h1>
        <small>
            <p class="text-muted">Admin/Developer : {{ $email }}</p>
        </small>
        <small>
            <a href="https://undiksha.ac.id/" class="text-decoration-none text-dark"><h6>{{ $campus }}</h6></a>
        </small>
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 text-justify">
                <p>{{ $deskripsi1 }}</p>
            </div>
            <div class="col-md-5 text-justify">
                <p>{{ $deskripsi2 }}</p>
            </div>
        </div>
    </div>
</div>

@endsection