@extends('layout')

@section('content')
    <div class="post-container">
        <h1 class="fw-normal fs-2 mt-5 mb-3">{{ $post->title }}</h1>
        <p class="fw-light text-black-50">{{ $post->published_at->format('d l, F') }}</p>
        <img src="{{ asset($post->image) }}" alt="" class="img-fluid mt-3 mb-5">

        <p class="lead mb-5">{!! $post->content  !!}</p>
    </div>
@endsection
