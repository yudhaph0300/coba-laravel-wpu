@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3 ">
            <div class="col-lg-8">

                <article class="mb-5">

                    <h2>
                        {{ $post->title }}
                    </h2>
                    <div class="my-2">
                        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"
                                class="me-1"></span>Back to all my
                            posts</a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"
                                class="me-1"></span>Edit</a>

                        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0" onclick="return confirm('Delete Data?')"><span
                                    class="me-1" data-feather="x-circle"></span>Delete</button>
                        </form>
                    </div>

                    @if ($post->image)
                        <img class="img-fluid mb-3" src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->category->name }}">
                    @else
                        <img class="img-fluid mb-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}">
                    @endif

                    {!! $post->body !!}
                </article>


            </div>
        </div>
    </div>
@endsection
