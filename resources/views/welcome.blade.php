<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Starter Kit</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel Kit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link btn btn-outline-secondary m-2">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link m-2">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link btn btn-outline-secondary m-2">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">Build Better with Laravel</h1>
                <p class="lead text-muted mb-4">A modern starter kit with everything you need to launch your next Laravel project quickly and efficiently.</p>
                <div class="d-flex gap-3">
                    <a href="https://laravel.com/docs" class="btn btn-primary">Read Docs</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-secondary">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card p-4">
                    <img src="https://placehold.co/600x400" alt="Laravel Demo" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Why Choose This Kit?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="feature-icon mb-3">
                        <svg class="bi" width="24" height="24"><use xlink:href="#speedometer"/></svg>
                    </div>
                    <h5 class="fw-semibold mb-2">Fast Setup</h5>
                    <p class="text-muted">Get started in minutes with pre-configured tools and settings.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="feature-icon mb-3">
                        <svg class="bi" width="24" height="24"><use xlink:href="#gear"/></svg>
                    </div>
                    <h5 class="fw-semibold mb-2">Modern Features</h5>
                    <p class="text-muted">Built with the latest Laravel features and best practices.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="feature-icon mb-3">
                        <svg class="bi" width="24" height="24"><use xlink:href="#shield"/></svg>
                    </div>
                    <h5 class="fw-semibold mb-2">Secure by Default</h5>
                    <p class="text-muted">Security features baked in from the start.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer py-4 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">© {{ date('Y') }} Laravel Starter Kit</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="https://github.com" class="text-muted text-decoration-none me-3">GitHub</a>
                <a href="https://laravel.com" class="text-muted text-decoration-none">Laravel</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap Icons -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="speedometer" viewBox="0 0 16 16">
        <!-- Same SVG paths as before -->
        <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l1.414 1.414a.5.5 0 1 1-.707.707L3.732 4.439a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm1.732 3.732a.5.5 0 0 1 0-.707l1.414-1.414a.5.5 0 0 1 .707.707L4.439 11.732a.5.5 0 0 1-.707 0zM8 13a.5.5 0 0 1-.5-.5V11a.5.5 0 0 1 1 0v1.5A.5.5 0 0 1 8 13zm3.732-1.732a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM13 8a.5.5 0 0 1-.5.5H11a.5.5 0 0 1 0-1h1.5A.5.5 0 0 1 13 8zm-1.732-3.732a.5.5 0 0 1 .707 0l1.414 1.414a.5.5 0 0 1-.707.707L11.732 4.439a.5.5 0 0 1 0-.707z"/>
    </symbol>
    <symbol id="gear" viewBox="0 0 16 16">
        <!-- Same SVG paths as before -->
        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
    </symbol>
    <symbol id="shield" viewBox="0 0 16 16">
        <!-- Same SVG paths as before -->
        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.489.918.736.272.249.549.51.848.76l.107.082c.255.195.526.389.82.578l.104.068c.293.188.608.368.924.541l.103.058c.31.17.645.326.985.467l.102.052c.326.15.675.285 1.033.405l.101.046c.34.125.704.238 1.075.34l.1.04c.366.11.756.204 1.15.28l.098.033c1.156.318 2.352.483 3.518.483.612 0 1.2-.046 1.762-.132.318-.049.62-.11.91-.182l.095-.028c.355-.095.695-.2 1.024-.31l.092-.032c.325-.11.634-.23.927-.36l.09-.038c.291-.13.565-.27.822-.415l.088-.043c.257-.145.498-.297.727-.456l.086-.048c.23-.16.447-.33.652-.51l.084-.053c.205-.18.397-.37.576-.565l.082-.058c.178-.195.344-.395.5-.602l.08-.063c.152-.207.294-.42.426-.639l.078-.068c.13-.22.25-.445.36-.674l.076-.073c.108-.23.207-.468.295-.712l.074-.078c.087-.245.165-.497.233-.754l.072-.083c.067-.258.127-.523.179-.795l.07-.088c.051-.273.096-.552.135-.836l.068-.093c.038-.285.069-.575.094-.867l.066-.098c.024-.293.043-.59.057-.89l.064-.103c.013-.302.021-.607.021-.915 0-3.266-1.584-5.923-3.54-7.302a61.44 61.44 0 0 0-2.837-.856.481.481 0 0 0-.328-.39zm2.67 13.537c-.305-.246-.62-.48-.943-.709a11.72 11.72 0 0 1-2.507-2.453C2.842 9.652 1.66 6.88.988 3.226a60.448 60.448 0 0 1 2.786-.84c1.704-.43 3.63-.43 5.334 0a60.448 60.448 0 0 1 2.786.84c-.672 3.654-1.854 6.426-3.528 8.739a11.72 11.72 0 0 1-2.507 2.453z"/>
    </symbol>
</svg>
</body>
</html>