@extends('layouts.app')

@section('title', 'Web Hosting & Domains')

@section('content')
    <!-- Hero Section -->
    <div class="text-white py-5" style="background: linear-gradient(135deg, #1c4c7c 0%, #2a5a8a 100%);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4 hero-heading">Ready to Elevate Your Online Presence?</h1>
                    <p class="lead mb-4 opacity-90">Let us help you build a strong digital foundation with our cutting-edge web hosting and cloud solutions. Contact us today to get started!</p>
                    <div class="d-flex gap-3 cta-buttons">
                        <a href="{{ url('/contact') }}" class="btn btn-warning rounded-0 text-white px-4 py-2">Get Started</a>
                        <a href="{{ url('/about') }}" class="btn btn-outline-light rounded-0 px-4 py-2">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/img-cloud-solutions.png') }}" alt="WebSys Platform" class="img-fluid hero-image">
                </div>
            </div>
        </div>
    </div>

    <!-- Domain Search Section -->
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="h3 text-center mb-4">Find Your Perfect Domain Name</h2>
                            <form class="d-flex gap-2">
                                <input type="text" class="form-control form-control-lg" placeholder="Enter your domain name">
                                <button type="submit" class="btn btn-warning text-white border-0 px-4 rounded-0">Search</button>
                            </form>
                            <div class="mt-4">
                                <div class="row text-center g-3">
                                    <div class="col-sm-3">
                                        <div class="p-3 border rounded">
                                            <h5 class="mb-1">.com</h5>
                                            <p class="mb-0 text-muted">$9.99/yr</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="p-3 border rounded">
                                            <h5 class="mb-1">.net</h5>
                                            <p class="mb-0 text-muted">$8.99/yr</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="p-3 border rounded">
                                            <h5 class="mb-1">.org</h5>
                                            <p class="mb-0 text-muted">$10.99/yr</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="p-3 border rounded">
                                            <h5 class="mb-1">.io</h5>
                                            <p class="mb-0 text-muted">$29.99/yr</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hosting Plans Section -->
    <div class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Web Hosting Packages</h2>
                <p class="lead text-muted">Choose the perfect hosting plan for your needs</p>
            </div>
            <div class="row g-4">
                <!-- Basic Plan -->
                <div class="col-lg-3">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body p-4">
                            <h3 class="h4 text-primary mb-4">Pro Essentials</h3>
                            <div class="display-6 mb-4">$4.99<small class="fs-6">/mo</small></div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Storage Size - 10GB
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Bandwidth - 15GB Monthly
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Domains Hosted - 2 Domains
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Email Accounts - 10 Accounts
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Free SSL Certificate
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    60 Day Money Back Guarantee
                                </li>
                            </ul>
                            <a href="{{ url('/contact') }}" class="btn btn-warning text-white border-0 px-4 rounded-0 w-100">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Standard Plan -->
                <div class="col-lg-3">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body p-4">
                            <h3 class="h4 text-primary mb-4">Pro Plus</h3>
                            <div class="display-6 mb-4">$9.99<small class="fs-6">/mo</small></div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Storage Size - 25GB SSD
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Bandwidth - 50GB Monthly
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Domains Hosted - 10 Domains
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Email Accounts - 25 Accounts
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Free SSL Certificate
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    60 Day Money Back Guarantee
                                </li>
                            </ul>
                            <a href="{{ url('/contact') }}" class="btn btn-warning text-white border-0 px-4 rounded-0 w-100">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Professional Plan -->
                <div class="col-lg-3">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body p-4">
                            <h3 class="h4 text-primary mb-4">Pro Elite</h3>
                            <div class="display-6 mb-4">$19.99<small class="fs-6">/mo</small></div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Storage Size - 50GB SSD
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Bandwidth - 300GB Monthly
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Domains Hosted - 20 Domains
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Email Accounts - 100 Accounts
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Free Domain plus SSL Certificate
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    60 Day Money Back Guarantee
                                </li>
                            </ul>
                            <a href="{{ url('/contact') }}" class="btn btn-warning text-white border-0 px-4 rounded-0 w-100">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Enterprise Plan -->
                <div class="col-lg-3">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body p-4">
                            <h3 class="h4 text-primary mb-4">Pro Enterprise</h3>
                            <div class="display-6 mb-4">$39.99<small class="fs-6">/mo</small></div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Storage Size - 100GB SSD
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Bandwidth - 1TB Monthly
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Domains Hosted - 50 Domain
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Email Accounts - 300 Accounts
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Free Domain plus SSL Certificate
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    60 Day Money Back Guarantee
                                </li>
                            </ul>
                            <a href="{{ url('/contact') }}" class="btn btn-warning text-white border-0 px-4 rounded-0 w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- VPS & Dedicated Section -->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">VPS & Dedicated Servers</h2>
                    <p class="lead mb-4">Need more power and control? Our VPS and dedicated server solutions provide the performance and flexibility your business demands.</p>
                    <div class="card border-0 shadow-sm feature-card mb-4">
                        <div class="card-body p-4">
                            <h3 class="h4 mb-3">Custom Solutions Include:</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Full Root Access
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Managed Support Available
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Custom Resource Allocation
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    99.9% Uptime Guarantee
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="mailto:business@melanegroup.com" class="btn btn-warning text-white border-0 px-4 rounded-0">
                            <i class="bi bi-envelope me-2"></i>Contact for Custom Quote
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/img-server.jpg') }}" alt="VPS & Dedicated Servers" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
