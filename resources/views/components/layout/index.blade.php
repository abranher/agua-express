@props([
    'title' => '',
    'vite' => [],
    'react' => false,
    'notifications' => false,
])

@php
    $resources = collect(['js/app.js', 'js/alpine.js'])
        ->concat($vite)
        ->map(fn($path) => "resources/$path")
        ->all();
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth box-border">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Agua Express - {{ $title ?? '' }}</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/logo.jpeg') }}" />
    @vite(['resources/css/app.css'])
</head>

<body>

    {{ $slot }}

    @vite($resources)
</body>

</html>
