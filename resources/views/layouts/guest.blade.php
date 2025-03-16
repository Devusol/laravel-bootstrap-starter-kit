<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="font-sans text-dark">
<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center p-3 bg-light">
    <div class="mb-4">
        <a href="/">
            <x-application-logo class="w-25 h-25 text-secondary" />
        </a>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <div class="card p-4 shadow-sm">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>