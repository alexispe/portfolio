<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="stripe-public-key" content="{{config('payment.stripe.public_key')}}"/>
    <title>Alexis Petit</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

@if(!isset($showTopBar) || $showTopBar)
    <x-top-bar></x-top-bar>
@endif

@yield('content')

<x-footer></x-footer>

<script src="{{ asset('js/app.js') }}" type="application/javascript"></script>
</body>
</html>
