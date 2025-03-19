<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1c4c7c">
    <title>@yield('title') - Melane Systems</title>
    
    <!-- Resource Hints -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    
    <!-- Critical CSS -->
    <style>
        :root {
            --primary: #1c4c7c;
            --accent: #ffc107;
            --transition-speed: 0.3s;
            --font-family: 'Roboto', system-ui, -apple-system, "Segoe UI", sans-serif;
        }

        body {
            font-family: var(--font-family);
        }

        /* Navbar styling */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-nav .nav-link {
            color: #2a5a8a;
            font-weight: 500;
            transition: color var(--transition-speed) ease;
            padding: 0.75rem 1rem;
            position: relative;
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary);
        }
        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 2px;
            background-color: var(--accent);
            transition: width var(--transition-speed) ease;
        }
        .navbar-nav .nav-link:hover::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 2px;
            background-color: var(--accent);
        }
        .dropdown-menu {
            border: 1px solid rgba(42, 90, 138, 0.1);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        .dropdown-item {
            color: #2a5a8a;
            padding: 0.75rem 1.5rem;
            transition: all var(--transition-speed) ease;
        }
        .dropdown-item:hover,
        .dropdown-item:active {
            background-color: rgba(42, 90, 138, 0.05);
            color: var(--primary);
        }
        .navbar-toggler {
            border-color: rgba(42, 90, 138, 0.1);
            padding: 0.75rem;
            transition: all var(--transition-speed) ease;
        }
        .navbar-toggler:focus {
            box-shadow: none;
            border-color: var(--accent);
        }
        .navbar-toggler:active {
            transform: scale(0.95);
        }

        @media (max-width: 991.98px) {
            .navbar-nav {
                text-align: center;
                padding: 1rem 0;
            }
            .nav-link {
                font-size: 1.1rem;
                padding: 0.75rem 1rem;
            }
            .navbar-nav .nav-link.active::after,
            .navbar-nav .nav-link:hover::after {
                width: 40px;
            }
            .dropdown-menu {
                border: none;
                background-color: rgba(0, 0, 0, 0.02);
                text-align: center;
            }
            .dropdown-item {
                padding: 0.75rem 1rem;
            }
            .navbar-toggler {
                margin-right: 0.5rem;
            }
        }

        /* Card hover effects */
        .hover-card {
            transition: transform var(--transition-speed) ease, box-shadow var(--transition-speed) ease;
        }
        .hover-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
        }
        @media (max-width: 991.98px) {
            .hover-card:active {
                transform: translateY(-1px);
                transition: transform 0.1s ease;
            }
        }

        /* Form controls */
        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(28, 76, 124, 0.15);
        }
        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        .btn-warning {
            background-color: var(--accent);
            border-color: var(--accent);
        }
        .btn-warning:hover {
            background-color: #e5a900;
            border-color: #e5a900;
        }
        .btn-warning:active {
            transform: scale(0.98);
            transition: transform 0.1s ease;
        }

        /* Footer styling */
        .footer {
            background-color: #f5f5f5;
            padding: 4rem 0 2rem;
            margin-top: 2rem;
        }
        .footer h5 {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        .footer p {
            color: #666;
            margin-bottom: 0.5rem;
        }
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        .footer-link {
            color: #666;
            text-decoration: none;
            transition: all var(--transition-speed) ease;
            position: relative;
            display: inline-block;
        }
        .footer-link:hover {
            color: var(--primary);
            transform: translateX(5px);
        }
        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        .social-icon {
            width: 40px;
            height: 40px;
            background-color: rgba(42, 90, 138, 0.08);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2a5a8a;
            text-decoration: none;
            transition: all var(--transition-speed) ease;
        }
        .social-icon:hover {
            background-color: rgba(42, 90, 138, 0.12);
            transform: translateY(-5px);
            color: var(--primary);
        }
        .footer-bottom {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid #e0e0e0;
            text-align: center;
        }
        .footer-bottom p {
            color: #666;
            font-size: 0.9rem;
        }
        
        @media (max-width: 991.98px) {
            .footer {
                padding: 3rem 0 1.5rem;
            }
            .footer h5 {
                margin-bottom: 1rem;
            }
            .footer-section {
                text-align: center;
                margin-bottom: 2.5rem;
            }
            .footer-section:last-child {
                margin-bottom: 0;
            }
            .footer-logo {
                margin: 0 auto;
                display: block;
            }
            .social-icons {
                justify-content: center;
            }
            .footer-links {
                margin-bottom: 1.5rem;
            }
            .footer-contact {
                margin-bottom: 2rem;
            }
            .footer-link::after {
                left: 50%;
                transform: translateX(-50%);
            }
            .payment-methods {
                margin-top: 1.5rem;
            }
        }
    </style>
    
    <!-- Preload Key Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    
    <!-- Fallback for no JavaScript -->
    <noscript>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </noscript>
    
    <!-- Non-critical CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="page-loader"></div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand mx-lg-4" href="{{ url('/') }}">
                <img src="{{ asset('images/img-melanesys-logo.png') }}" alt="Melane Systems" class="img-fluid" style="max-width: 180px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('skolo*') ? 'active' : '' }}" href="{{ url('/skolo') }}">Skoloi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('hosting*') ? 'active' : '' }}" href="{{ url('/hosting') }}">Hosting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('business*') ? 'active' : '' }}" href="{{ url('/business') }}">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('getdladla*') ? 'active' : '' }}" href="{{ url('/getdladla') }}">GetDladla</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact*') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('about*') || request()->is('vacancies*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                            Company
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/about') }}"><i class="fas fa-info-circle me-2"></i>About Us</a></li>
                            <li><a class="dropdown-item" href="{{ url('/vacancies') }}"><i class="fas fa-briefcase me-2"></i>Vacancies</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user me-1"></i> Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ url('/login') }}"><i class="fas fa-sign-in-alt me-2"></i>Sign In</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ url('/signup') }}"><i class="fas fa-user-plus me-2"></i>Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 footer-section">
                    <h5>About Us</h5>
                    <p>Melane Systems provides innovative digital solutions for businesses and educational institutions.</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-section">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="{{ url('/about') }}" class="footer-link">About Us</a></li>
                        <li><a href="{{ url('/contact') }}" class="footer-link">Contact</a></li>
                        <li><a href="#" class="footer-link">Terms & Conditions</a></li>
                        <li><a href="#" class="footer-link">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-section">
                    <h5>Our Services</h5>
                    <ul class="footer-links">
                        <li><a href="{{ url('/skolo') }}" class="footer-link">Skoloi</a></li>
                        <li><a href="{{ url('/hosting') }}" class="footer-link">Web Hosting</a></li>
                        <li><a href="{{ url('/business') }}" class="footer-link">Business Solutions</a></li>
                        <li><a href="{{ url('/getdladla') }}" class="footer-link">GetDladla</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-section">
                    <h5>Contact Us</h5>
                    <p><i class="fas fa-envelope me-2"></i> business@melanegroup.com</p>
                    <p><i class="fas fa-phone me-2"></i> +26876671033</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Manzini, Eswatini</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Melane Systems. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    @stack('scripts')
</body>
</html>
