@extends('layouts.app')

@section('title', 'GetDladla - Smart Rental Management')

@section('content')
    <!-- Hero Section -->
    <div class="text-white py-5" style="background-color: #1c4c7c">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">GetDladla</h1>
                    <p class="lead mb-4">The Smart Way to Rent and Manage Properties. Simplifying rental management for landlords and tenants with secure payments, easy listings, and hassle-free communication.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-warning rounded-0 text-white px-4">
                            <i class="fas fa-home me-2"></i>Landlord App
                        </a>
                        <a href="#" class="btn btn-warning rounded-0 text-white px-4">
                            <i class="fas fa-building me-2"></i>Tenant App
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/img-rental-system.png') }}" alt="GetDladla Platform" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-5">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-5">Platform Features</h2>
            <div class="row g-4">
                <!-- Landlord Features -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body p-4">
                            <h3 class="h4 mb-4"><i class="fas fa-home text-warning me-2"></i>For Landlords</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Add and manage apartments easily</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Set rental prices and update availability</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Receive secure payments via MTN MoMo & Stripe</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Manage tenant complaints and reviews</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Tenant Features -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body p-4">
                            <h3 class="h4 mb-4"><i class="fas fa-building text-warning me-2"></i>For Tenants</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Search apartments by location and price</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Pay rent and finder's fees online</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Rate and review apartments</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Submit complaints directly to landlords</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-5">How It Works</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="display-4 text-warning mb-3">
                            <i class="fas fa-list-ul"></i>
                        </div>
                        <h3 class="h5">List or Search</h3>
                        <p class="text-muted">Landlords list properties while tenants search for their perfect home</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="display-4 text-warning mb-3">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="h5">Connect & Communicate</h3>
                        <p class="text-muted">Direct communication between landlords and tenants</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="display-4 text-warning mb-3">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h3 class="h5">Secure Payments</h3>
                        <p class="text-muted">Safe and convenient payment processing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing -->
    <div class="py-5">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-5">Pricing</h2>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm feature-card">
                        <div class="card-body p-4 text-center">
                            <h3 class="h4 mb-4">Commission Based</h3>
                            <p class="display-6 mb-4">5%</p>
                            <ul class="list-unstyled text-start mb-4">
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>No upfront fees</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Unlimited listings</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Secure payment processing</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i>24/7 support</li>
                            </ul>
                            <a href="#" class="btn btn-warning text-white px-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact & Support -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-5">Contact & Support</h2>
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <p class="lead mb-4">Need help? Our support team is available 24/7</p>
                    <div class="d-flex justify-content-center gap-4">
                        <a href="mailto:support@getdladla.com" class="btn btn-outline-dark">
                            <i class="fas fa-envelope me-2"></i>Email Support
                        </a>
                        <a href="tel:+27123456789" class="btn btn-outline-dark">
                            <i class="fas fa-phone me-2"></i>Call Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
