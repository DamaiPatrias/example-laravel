@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $posts->title }}</h1>
                <p>
                    By. 
                    <a href="/blog?author={{ $posts->author->name }}" class="text-decoration-none">{{ $posts->author->name }}</a> 
                    in 
                    <a href="/blog?category={{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a>
                </p>
                <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid">
                <article class="my-3 fs-5">
                    {!!  $posts->body  !!}
                </article>
                <a href="/blog" class="d-block mt-3">back to post</a>
            </div>
        </div>
    </div>

    {{-- <article>
        <h2>{{ $posts->title }}</h2>
        <p>
            By. 
            <a href="/authors/{{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->name }}</a> 
            in 
            <a href="/categories/{{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a>
        </p>
        {!!  $posts->body  !!}
    </article> 

    <a href="/blog" class="d-block mt-3">back to post</a>--}}

@endsection 