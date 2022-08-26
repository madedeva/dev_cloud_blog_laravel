@extends('layouts.main')

@section('container')

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center pt-5">
        <h1>{{ $name }}</h1>
        <h6>{{ $campus }}</h6>
        <h5>{{ $email }}</h5>
    </div>
</div>

@endsection