@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <style>
        .hover-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .hover-card:hover, .hover-card:focus, .hover-card:active {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1) !important;
        }
        .hover-card .display-4 {
            transform: scale(1);
            transition: transform 0.3s ease;
        }
        .hover-card:hover .display-4,
        .hover-card:focus .display-4,
        .hover-card:active .display-4 {
            transform: scale(1.1);
        }
        .hover-card .btn {
            transition: all 0.3s ease;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }
        .hover-card:hover .btn,
        .hover-card:focus .btn,
        .hover-card:active .btn {
            opacity: 1;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        @media (max-width: 991.98px) {
            .hero-heading {
                font-size: 2.5rem;
            }
            .hero-image {
                margin-top: 2rem;
            }
            .cta-buttons {
                flex-direction: column;
                gap: 1rem !important;
            }
            .cta-buttons .btn {
                width: 100%;
                padding: 0.75rem 1rem;
                font-size: 1.1rem;
            }
            .what-we-offer {
                margin-top: -3rem;
            }
            .hover-card {
                margin-bottom: 1rem;
            }
            .hover-card:active {
                transform: translateY(-3px);
                transition: transform 0.1s ease;
            }
            .hover-card .btn {
                padding: 0.75rem 2rem;
                margin-top: 1rem;
            }
            .feature-list {
                margin-bottom: 2rem;
            }
            .feature-list .h5 {
                font-size: 1.1rem;
            }
            .skolo-hero-image {
                margin-top: 2rem;
            }
            .skolo-hero-image .bg-warning {
                top: 10px;
                left: 10px;
            }
        }

        .feature-list {
            transition: all 0.3s ease;
        }
        .feature-list .d-flex {
            transition: all 0.3s ease;
            padding: 0.5rem 0;
        }
        .feature-list .d-flex:hover {
            transform: translateX(10px);
            background: rgba(42, 90, 138, 0.03);
        }
        .skolo-hero-image {
            transition: all 0.3s ease;
        }
        .skolo-hero-image:hover {
            transform: translateY(-5px);
        }
        .skolo-badge {
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            font-weight: 500;
        }
        .skolo-btn {
            transition: all 0.3s ease;
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        .skolo-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

    <!-- Hero Section -->
    <div class="text-white py-5" style="background: linear-gradient(135deg, #1c4c7c 0%, #2a5a8a 100%);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4 hero-heading">Digital Solutions for Modern Business</h1>
                    <p class="lead mb-4 opacity-90">From education to property management, we provide comprehensive digital solutions to help your business thrive in the digital age.</p>
                    <div class="d-flex gap-3 cta-buttons">
                        <a href="{{ url('/contact') }}" class="btn btn-warning rounded-0 text-white px-4 py-2">Get Started</a>
                        <a href="{{ url('/about') }}" class="btn btn-outline-light rounded-0 px-4 py-2">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/img-welcome-hero-section.png') }}" alt="WebSys Platform" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- What We Offer Section -->
    <section class="py-5 what-we-offer">
        <div class="container">
            <span class="badge bg-warning text-white mb-3 px-3 py-2 rounded-0 skolo-badge">What We Offer</span>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm rounded-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-graduation.png') }}" alt="Skoloi" class="img-fluid">
                            <h3 class="h4 fw-bold mb-3">Skoloi</h3>
                            <p class="text-muted mb-4">Advanced Learning Management System designed for modern education. Perfect for schools and students.</p>
                        </div>
                        <div class="card-footer bg-transparent text-center">
                            <a href="{{ url('/skolo') }}" class="btn btn-warning rounded-0 text-white px-4 py-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm rounded-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-cloud-storage.png') }}" alt="Hosting" class="img-fluid">
                            <h3 class="h4 fw-bold mb-3">Hosting</h3>
                            <p class="text-muted mb-4">Secure and reliable web hosting solutions that keep your business online 24/7.</p>
                        </div>
                        <div class="card-footer bg-transparent text-center">
                            <a href="{{ url('/hosting') }}" class="btn btn-warning rounded-0 text-white px-4 py-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-0 shadow-sm hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-meeting.png') }}" alt="Business" class="img-fluid">
                            <h3 class="h4 fw-bold mb-3">Business</h3>
                            <p class="text-muted mb-4">Custom digital solutions including CRM, ERP, and software development for your business needs.</p>
                        </div>
                        <div class="card-footer bg-transparent text-center">
                            <a href="{{ url('/business') }}" class="btn rounded-0 btn-warning text-white px-4 py-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-0 shadow-sm hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-real-estate.png') }}" alt="GetDladla" class="img-fluid">
                            <h3 class="h4 fw-bold mb-3">GetDladla</h3>
                            <p class="text-muted mb-4">Smart rental management platform that simplifies property management for landlords and tenants.</p>
                        </div>
                        <div class="card-footer bg-transparent text-center">
                            <a href="{{ url('/getdladla') }}" class="btn rounded-0 btn-warning text-white px-4 py-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skolo Institute Promotion Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="badge bg-warning text-white mb-3 px-3 py-2 rounded-0 skolo-badge">Featured Product</span>
                    <h2 class="display-5 fw-bold mb-4" style="color: #1c4c7c;">Transform Education with Skoloi</h2>
                    <p class="lead mb-4" style="color: #2a5a8a;">Empower your educational institution with our advanced Learning Management System. Skoloi provides everything you need for modern, effective learning.</p>
                    <div class="mb-4 feature-list">
                        <div class="d-flex align-items-center mb-2 px-3">
                            <i class="bi bi-check-circle-fill text-warning me-3 fs-4"></i>
                            <span class="h5 mb-0" style="color: #2a5a8a;">Interactive Virtual Classrooms</span>
                        </div>
                        <div class="d-flex align-items-center mb-2 px-3">
                            <i class="bi bi-check-circle-fill text-warning me-3 fs-4"></i>
                            <span class="h5 mb-0" style="color: #2a5a8a;">Advanced Assessment Tools</span>
                        </div>
                        <div class="d-flex align-items-center mb-2 px-3">
                            <i class="bi bi-check-circle-fill text-warning me-3 fs-4"></i>
                            <span class="h5 mb-0" style="color: #2a5a8a;">Real-time Progress Tracking</span>
                        </div>
                    </div>
                    <div class="d-flex gap-3 cta-buttons">
                        <a href="{{ url('/skolo') }}" class="btn btn-warning text-white px-4 py-2 rounded-0 skolo-btn">Explore Skoloi</a>
                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary px-4 py-2 rounded-0 skolo-btn">Request Demo</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative skolo-hero-image">
                        <div class="bg-warning position-absolute" style="width: 100%; height: 100%; top: 15px; left: 15px; z-index: 1;"></div>
                        <img src="{{ asset('images/img-hero-skoloi.jpg') }}" alt="Skoloi Platform" class="img-fluid position-relative shadow" style="z-index: 2;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #1c4c7c 0%, #2a5a8a 100%);">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold text-white mb-4 hero-heading">Ready to Transform Your Business?</h2>
                    <p class="lead text-white opacity-90 mb-4">Join thousands of businesses that trust Melane Systems for their digital needs. Start your journey today.</p>
                    <div class="d-flex justify-content-center gap-3 cta-buttons">
                        <a href="{{ url('/contact') }}" class="btn btn-warning text-white rounded-0 px-4 py-2">Get Started Now</a>
                        <a href="{{ url('/about') }}" class="btn btn-outline-light rounded-0 px-4 py-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Customer Service Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="mb-5">
            <span class="badge bg-warning text-white mb-3 px-3 py-2 rounded-0 skolo-badge">Customer Service</span>
            <h2 class="display-5 fw-bold mb-4 text-center" style="color: #1c4c7c;">Exceptional Support at Every Step</h2>
            <p class="lead mb-0 text-center" style="color: #2a5a8a;">Our dedicated team ensures your success with personalized assistance and rapid response times.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 rounded-0 h-100 hover-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-headset text-warning fs-1 me-3"></i>
                            <h3 class="h4 mb-0" style="color: #1c4c7c;">24/7 Support</h3>
                        </div>
                        <p class="mb-0" style="color: #2a5a8a;">Our support team is available around the clock to assist you with any queries or technical issues you may encounter.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 rounded-0 h-100 hover-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-lightning-charge text-warning fs-1 me-3"></i>
                            <h3 class="h4 mb-0" style="color: #1c4c7c;">Quick Response</h3>
                        </div>
                        <p class="mb-0" style="color: #2a5a8a;">Experience lightning-fast response times with our dedicated support channels and expert technical team.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 rounded-0 h-100 hover-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-person-check text-warning fs-1 me-3"></i>
                            <h3 class="h4 mb-0" style="color: #1c4c7c;">Personal Touch</h3>
                        </div>
                        <p class="mb-0" style="color: #2a5a8a;">Get personalized solutions tailored to your specific needs from our experienced customer success team.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="{{ url('/contact') }}" class="btn btn-warning text-white rounded-0 px-4 py-2 skolo-btn">Contact Support</a>
        </div>
    </div>
</section>

    <!-- Footer -->
@endsection
