@extends('layout')

@section('content')
    <x-navbar.devweb></x-navbar.devweb>

    @include('partials.devweb.sylius')
    @include('partials.devweb.laravel')
    @include('partials.devweb.optimisation')
@endsection
