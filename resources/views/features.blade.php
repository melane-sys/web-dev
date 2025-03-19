@extends('layouts.app')

@section('title', 'Features')

@section('content')
    <!-- Hero Section -->
    <div class="text-white py-5" style="background-color: #1c4c7c">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-3">Our Features</h1>
                    <p class="lead mb-4">Discover the powerful features that make Melane Systems stand out.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Features -->
    <div class="container py-5">
        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-lightning-fill text-primary h4 mb-0"></i>
                            </div>
                            <h3 class="h4 mb-0">Fast Performance</h3>
                        </div>
                        <p class="text-muted">
                            Optimized for speed and efficiency, ensuring your web applications run smoothly.
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Quick load times</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Efficient caching</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Optimized database queries</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-shield-check text-primary h4 mb-0"></i>
                            </div>
                            <h3 class="h4 mb-0">Secure System</h3>
                        </div>
                        <p class="text-muted">
                            Built with security in mind, protecting your data and users.
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>HTTPS encryption</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>SQL injection protection</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Regular security updates</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-phone text-primary h4 mb-0"></i>
                            </div>
                            <h3 class="h4 mb-0">Responsive Design</h3>
                        </div>
                        <p class="text-muted">
                            Perfect display on all devices, from mobile to desktop.
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Mobile-first approach</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Flexible grid system</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Adaptive components</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-gear text-primary h4 mb-0"></i>
                            </div>
                            <h3 class="h4 mb-0">Easy Integration</h3>
                        </div>
                        <p class="text-muted">
                            Seamlessly integrate with your existing tools and systems.
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>API support</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Third-party plugins</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Custom extensions</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-graph-up text-primary h4 mb-0"></i>
                            </div>
                            <h3 class="h4 mb-0">Analytics</h3>
                        </div>
                        <p class="text-muted">
                            Detailed insights into your application's performance.
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Real-time monitoring</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Custom reports</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Performance metrics</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-headset text-primary h4 mb-0"></i>
                            </div>
                            <h3 class="h4 mb-0">24/7 Support</h3>
                        </div>
                        <p class="text-muted">
                            Round-the-clock support to help you succeed.
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Live chat support</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Technical assistance</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Documentation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">Ready to get started?</h2>
                    <p class="lead text-muted mb-4">Join thousands of satisfied users who trust Melane Systems.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-warning text-white border-0 px-4 rounded-0">Contact Us Today</a>
                </div>
            </div>
        </div>
    </div>
@endsection
