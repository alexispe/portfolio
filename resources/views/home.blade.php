@php
    $showTopBar = false;
@endphp

@extends('layout')

@section('content')
    <x-top-bar sticky dark></x-top-bar>

    @include('partials.hero')

    <section class="bg-light py-5">
        <div id="main" class="container">
            <h2 class="fw-bold display-6 py-5">
                Derniers projets. <span class="text-black-50"></span>
            </h2>

            <x-projects-list></x-projects-list>
        </div>
    </section>

    <x-big-screen></x-big-screen>
@endsection
