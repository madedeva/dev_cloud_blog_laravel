@extends('layouts.main')

@section('container')

<div class="container pt-4">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
        <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-primary"> {{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-primary">{{ $post->category->name }}</a> posted on {{ $post->created_at->format('d F Y') }}<p/>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>
        <h5><a href="/posts" class="text-decoration-none text-primary">Back to posts</a></h5>
        </div>
    </div>
</div>

@endsection