@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/blog" method="get">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif 
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@if($posts->count())
<div class="card mb-3">
    @if ($posts[0]->image)
    <div style="max-height: 400px; overflow: hidden;" class="text-center">
      <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3">
    </div>
    @else
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    @endif
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <small class="text-muted">
        <p>
          By. 
          <a href="/blog?author={{ $posts[0]->author->name }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> 
          in 
          <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
          {{ $posts[0]->created_at->diffForHumans() }}
        </p>
    </small>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
  </div>

<div class="container">
  <div class="row">
    @foreach($posts->skip(1) as $item)
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="position-absolute px-4 py-1" style="background-color: rgba(0, 0, 0, 0.6)"><a href="/blog?category={{ $item->category->slug }}" class="text-decoration-none text-white">{{ $item->category->name }}</a></div>
          @if ($item->image)
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->category->name }}" class="img-fluid">
          @else
            <img src="https://source.unsplash.com/500x400?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
          @endif
          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <small class="text-muted">
              <p>
                By. 
                <a href="/blog?author={{ $item->author->name }}" class="text-decoration-none">{{ $item->author->name }}</a> 
                {{ $item->created_at->diffForHumans() }}
              </p>
          </small>
            <p class="card-text">{{ $item->excerpt }}</p>
            <a href="/post/{{ $item->slug }}" class="btn btn-primary">read more</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

@else
  <p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-end">
  {{ $posts->links() }}
</div>

{{-- @foreach ($posts->skip(1) as $item)
    <article class="mb-5 border-bottom pb-4">
    <h2><a href="/post/{{ $item->slug }}" class="text-decoration-none">{{ $item->title }}</a></h2>
    <p>
        By. 
        <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a> 
        in 
        <a href="categories/{{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a>
    </p>
    <p>{{ $item->excerpt }}</p>
    <a href="/post/{{ $item->slug }}" class="text-decoration-none">Read more...</a>
    </article>
@endforeach --}}

@endsection
