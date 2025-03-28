@extends('layouts.app')

@section('title', 'Skolo Institute')

@section('content')
    <!-- Hero Section -->
    <div class="text-white py-5" style="background: linear-gradient(135deg, #1c4c7c 0%, #2a5a8a 100%);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4 hero-heading">Revolutionizing Education for the Digital Age</h1>
                    <p class="lead mb-4 opacity-90">From online learning to school management, Skolo Institute provides comprehensive digital education solutions, empowering students and schools to thrive in the digital age.</p>
                    <div class="d-flex gap-3 cta-buttons">
                        <a href="{{ url('/contact') }}" class="btn btn-warning text-white px-4 py-2 rounded-0">Get Started</a>
                        <a href="{{ url('/about') }}" class="btn btn-outline-light rounded-0 px-4 py-2">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/img-landing-skoloi.png') }}" alt="Skolo Institute" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Students Section -->
    <div class="py-5">
        <div class="container">
            <span class="badge bg-warning text-white mb-3 px-3 py-2 rounded-0 skolo-badge">Skoloi for Students</span>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm rounded-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-lms.png') }}" alt="Online Learning Management System" class="img-fluid card-img">
                            <h2 class="h4 fw-bold">Online Learning Management System</h2>
                            <p class="text-muted mb-4">State-of-the-art LMS designed specifically for individual learners.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm rounded-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-registration.jpg') }}" alt="Self-Registration & Enrollment" class="img-fluid card-img">
                            <h2 class="h4 fw-bold">Self-Registration & Enrollment</h2>
                            <p class="text-muted mb-4">Easy self-registration process and course enrollment system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-0 shadow-sm hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-tutors.jpg') }}" alt="Dedicated Online Tutors" class="img-fluid">
                            <h3 class="h4 fw-bold mb-0">Dedicated Online Tutors</h3>
                            <p class="text-muted">Access to experienced tutors who provide personalized support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-0 shadow-sm hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-self-paced-learning.jpg') }}" alt="GetDladla" class="img-fluid">
                            <h3 class="h4 fw-bold mb-3">Self-Paced Learning</h3>
                            <p class="text-muted mb-4">Skolo Institute allows students to learn at their own speed, anytime and anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skolo  Promotion Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4" style="color: #1c4c7c;">Skoloi for Students – Learn, Grow, Succeed!</h2>
                    <p class="lead mb-4" style="color: #2a5a8a;">Access interactive courses, dedicated tutors, recorded lessons, and live classes—all tailored to help you excel. Join Skolo and take control of your academic success today!</p>
                    <div class="d-flex gap-3 cta-buttons">
                        <a href="{{ route('student.register') }}" class="btn btn-warning text-white px-4 py-2 rounded-0 skolo-btn">Register Now!!</a>
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
    <!-- Schools Section -->
    <div class="py-5">
        <div class="container">
            <span class="badge bg-warning text-white mb-3 px-3 py-2 rounded-0 skolo-badge">Skoloi for Schools</span>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm rounded-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-lms.png') }}" alt="Online Learning Management System" class="img-fluid card-img">
                            <h2 class="h4 fw-bold">Moodle-based LMS</h2>
                            <p class="text-muted mb-4">Our Moodle-based LMS provides schools with a flexible, scalable, and interactive learning platform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm rounded-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-registration.jpg') }}" alt="Self-Registration & Enrollment" class="img-fluid card-img">
                            <h2 class="h4 fw-bold">Results Management</h2>
                            <p class="text-muted mb-4">Our Results Management System simplifies student performance tracking and report card generation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-0 shadow-sm hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-tutors.jpg') }}" alt="Dedicated Online Tutors" class="img-fluid">
                            <h3 class="h4 fw-bold mb-0">School's Management</h3>
                            <p class="text-muted">Our School Management System streamlines administration with student enrollment and fee management.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-0 shadow-sm hover-card">
                        <div class="card-body p-4 text-center">
                            <img src="{{ asset('images/img-self-paced-learning.jpg') }}" alt="GetDladla" class="img-fluid">
                            <h3 class="h4 fw-bold mb-3">Live Classes</h3>
                            <p class="text-muted mb-4">Our Live Classes feature enables real-time interactive learning with expert tutors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skolo Institute Promotion Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="position-relative skolo-hero-image">
                        <div class="bg-warning position-absolute" style="width: 100%; height: 100%; top: 15px; left: 15px; z-index: 1;"></div>
                        <img src="{{ asset('images/img-hero-skoloi.jpg') }}" alt="Skoloi Platform" class="img-fluid position-relative shadow" style="z-index: 2;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4" style="color: #1c4c7c;">Transform Education with Skoloi</h2>
                    <p class="lead mb-4" style="color: #2a5a8a;">Empower your educational institution with our advanced Learning Management System. Skoloi provides everything you need for modern, effective learning.</p>
                    <div class="d-flex gap-3 cta-buttons">
                        <a href="{{ route('student.register') }}" class="btn btn-warning text-white px-4 py-2 rounded-0 skolo-btn">Register Now!!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA section -->
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="h3 mb-4">Ready to Transform Your Institution?</h2>
                    <p class="lead text-muted mb-4">Let's discuss how our solutions can help your institution grow.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-warning rounded-0 text-white px-4">
                        <i class="fas fa-paper-plane me-2"></i>Contact Us Today
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
