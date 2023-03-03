@extends('layouts.main')

@section('container')
    <h3>{{ $title }}</h3>

    @if ($posts->count())
        <div class="card mb-3">
            <img class="card-img-top" src="https://source.unsplash.com/1200x400?tecnology" alt="Card image cap">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <small class="text-muted">
                    By. <a href="/authors/{{ $posts[0]->author->username }}"
                        class="text-decoration-none">{{ $posts[0]->author->name }}
                    </a> in
                    <a href="/categories/{{ $posts[0]->category->slug }}"
                        class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}
                </small>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="https://source.unsplash.com/600x400?tecnology" alt="Card image cap">
                        <div class="card-body">
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                                <h5 class="card-title">{{ $post->title }}</h5>
                            </a>
                            <small class="text-muted">
                                By. <a href="/authors/{{ $post->author->username }}"
                                    class="text-decoration-none">{{ $post->author->name }}
                                </a> in
                                <a href="/categories/{{ $post->category->slug }}"
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
@endsection
