
@extends('layouts.main')

@section('container')
<div class="jumbotron jumbotron-fluid">
    <div class="container pt-5">
        <div class="row mt-5">
            <div class="row justify-content-center">
                <div class="col-md-5 text-justify">
                    <img src="img/read.svg" width="75%">
                </div>
                <div class="col-md-5 text-justify">
                    <h1 class="home-title display-3 font-weight-bold">Dev Cloud Blog</h1>
                    <small><p class="text-dark fs-6 pt-3">Dev Cloud Blog is a website that presents articles that are very useful for readers. Enjoy reading!</p></small>
                    <a href="/posts" class="btn btn-info text-white mt-4">Start reading</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 