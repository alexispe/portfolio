@extends('layout')

@section('content')
    <x-navbar.devops></x-navbar.devops>

    @include('partials.devops.cicd')
    @include('partials.devops.docker')
@endsection
