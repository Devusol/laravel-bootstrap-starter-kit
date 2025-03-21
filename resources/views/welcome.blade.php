<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Bootstrap Starter Kit</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    @vite(['resources/css/app.scss', 'resources/css/template.scss', 'resources/js/app.js'])
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/hostmoz.png') }}" alt="HostMoz Logo" class="brand-logo" style="height: 40px; margin-right: 10px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary m-2">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link m-2">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="btn btn-primary m-2">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="py-5" style="background: linear-gradient(180deg, var(--primary-color) 10%, var(--primary-dark) 100%);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 text-white">
                <h1 class="display-4 fw-bold mb-4">Build Better with Laravel</h1>
                <p class="lead mb-4">A modern starter kit with everything you need to launch your next Laravel project quickly and efficiently.</p>
                <div class="d-flex gap-3">
                    <a href="https://laravel.com/docs" class="btn btn-light">Read Docs</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light">Get Started</a>
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
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-semibold mb-2">Fast Setup</h5>
                    <p class="text-muted">Get started in minutes with pre-configured tools and settings.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-cogs fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-semibold mb-2">Modern Features</h5>
                    <p class="text-muted">Built with the latest Laravel features and best practices.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-shield-alt fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-semibold mb-2">Secure by Default</h5>
                    <p class="text-muted">Security features baked in from the start.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer py-4 bg-white border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">© {{ date('Y') }} HostMoz. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="https://github.com" class="text-muted text-decoration-none me-3">
                    <i class="fab fa-github"></i> GitHub
                </a>
                <a href="https://laravel.com" class="text-muted text-decoration-none">
                    <i class="fab fa-laravel"></i> Laravel
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>