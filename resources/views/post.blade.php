@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5 ">
            <div class="col-md-8">
                <article class="mb-5">

                    <h2>
                        {{ $post->title }}
                    </h2>
                    <p>By <a href="/authors/{{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }} </a> in
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a>
                    </p>
                    <img class="img-fluid mb-3" src="https://source.unsplash.com/1200x400?tecnology" alt="Card image cap">
                    {!! $post->body !!}
                </article>

                <a href="/posts">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
