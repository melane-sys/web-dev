@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <div class="text-white py-5" style="background-color: #1c4c7c">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-3">About Melane Systems</h1>
                    <p class="lead mb-4">Learn about our mission, vision, and the team behind Melane Systems.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-warning text-white border-0 px-4 rounded-0">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission & Vision Section -->
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <h2 class="h3 text-primary mb-3">Our Mission</h2>
                        <p class="text-muted">
                            To provide innovative web solutions that empower businesses and individuals to achieve their digital goals through cutting-edge technology and exceptional user experiences.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <h2 class="h3 text-primary mb-3">Our Vision</h2>
                        <p class="text-muted">
                            To become the leading web development platform that transforms ideas into powerful, scalable, and user-friendly web applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Core Values</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-primary display-5"></i>
                            </div>
                            <h3 class="h4 mb-3">Excellence</h3>
                            <p class="text-muted">
                                We strive for excellence in every project we undertake, ensuring the highest quality standards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="bi bi-lightning-fill text-primary display-5"></i>
                            </div>
                            <h3 class="h4 mb-3">Innovation</h3>
                            <p class="text-muted">
                                We embrace new technologies and creative solutions to solve complex challenges.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="bi bi-people-fill text-primary display-5"></i>
                            </div>
                            <h3 class="h4 mb-3">Collaboration</h3>
                            <p class="text-muted">
                                We believe in the power of teamwork and building strong relationships with our clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
