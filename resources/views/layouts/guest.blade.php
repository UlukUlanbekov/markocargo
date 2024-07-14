<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <style>
        .main {
            background: url({{ asset('images/background.jpeg') }}) no-repeat 50%/cover;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="font-sans text-gray-900 antialiased">
    @include('layouts.navigation')
    <div class="container d-flex flex-column justify-content-center align-items-center bg-light" style="min-height:80vh!important">
        <div class="card w-100" style="max-width: 24rem;">
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>
