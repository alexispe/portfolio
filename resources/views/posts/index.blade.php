@extends('layout')

@section('content')
    <div class="post-container my-5 pt-5">
        @foreach ($posts as $post)
            <h2 class="fw-normal fs-2 my-3">{{ $post->title }}</h2>
            <p class="fw-light text-black-50">{{ $post->published_at->format('d l, F') }}</p>
            <img src="{{ asset($post->image) }}" class="img-fluid my-3" alt="">
            <div class="pb-5">
                <p class="lead my-3">{!! $post->excerpt !!}</p>
                <a href="{{ route('posts.show', $post) }}" class="text-decoration-none lead">
                    Lire plus
                </a>
            </div>
            <hr class="my-5">
        @endforeach
    </div>
@endsection
