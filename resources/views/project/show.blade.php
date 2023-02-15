@extends('layout')

@section('content')
    <div class="post-container">
        <h1 class="fw-semi-bold fs-2 my-5">{{ $project->title }}</h1>

        <div class="row my-5">
            <div class="col-md-6">
                <div class="d-flex mt-4">
                    <div class="me-3">
                        <img src="{{ asset('storage/icons/person.svg') }}" alt="" class="mt-1" style="width: 20px">
                    </div>
                    <div>
                        <p class="fw-semi-bold fs-4">Mon rôle</p>

                        <div class="lead">{{ $project->role }}</div>
                    </div>
                </div>


                <div class="d-flex mt-4">
                    <div class="me-3">
                        <img src="{{ asset('storage/icons/list.dash.svg') }}" alt="" class="mt-2" style="width: 20px">
                    </div>
                    <div>
                        <p class="fw-semi-bold fs-4">Technologies</p>

                        <ul class="list-unstyled">
                            @foreach($project->technologies as $technology)
                                <li class="lead">{{ $technology }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <p class="lead mb-5">{!! $project->description  !!}</p>
                <a href="{{ $project->link }}" class="text-decoration-none lead d-flex align-items-end" target="_blank">
                    <img src="{{ asset('storage/icons/link.svg') }}" alt="" style="">
                    <span class="ps-2" style="line-height: 1.3em">Accéder au site</span>
                </a>
            </div>
        </div>

        @foreach($project->images as $image)
            <img src="{{ asset($image) }}" alt="" class="img-fluid rounded-4 shadow mb-5">
        @endforeach
    </div>
@endsection
