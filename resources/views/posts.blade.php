@extends('layouts.main')

@section('container')


    <div class="row justify-content-end">
        <div class="col-md-4">
            <h3>{{ $title }}</h3>
        </div>
        <div class="col-md-8">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                alt="Card image cap">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <small class="text-muted">
                    By. <a href="/posts?author={{ $posts[0]->author->username }}"
                        class="text-decoration-none">{{ $posts[0]->author->name }}
                    </a> in
                    <a href="/posts?category={{ $posts[0]->category->slug }}"
                        class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}
                </small>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://source.unsplash.com/600x400?{{ $post->category->name }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </a>
                                <small class="text-muted">
                                    By. <a href="/posts?author={{ $post->author->username }}"
                                        class="text-decoration-none">{{ $post->author->name }}
                                    </a> in
                                    <a href="/posts?category={{ $post->category->slug }}"
                                        class="text-decoration-none">{{ $post->category->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    {{ $posts->links() }}
@endsection
