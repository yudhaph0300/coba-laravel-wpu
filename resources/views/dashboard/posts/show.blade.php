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
                        <a href="" class="btn btn-warning"><span data-feather="edit" class="me-1"></span>Edit</a>
                        <a href="" class="btn btn-danger"><span data-feather="x-circle"
                                class="me-1"></span>Delete</a>
                    </div>


                    <img class="img-fluid mb-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="Card image cap">
                    {!! $post->body !!}
                </article>


            </div>
        </div>
    </div>
@endsection
