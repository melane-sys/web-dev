@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <div class="text-white py-5" style="background-color: #1c4c7c">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Exceptional Customer Service</h1>
                    <p class="lead mb-4">At Melane Systems, we prioritize Exceptional Customer Service, ensuring that every client receives fast, reliable, and personalized support.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-warning rounded-0 text-white px-4">
                        <i class="fas fa-rocket me-2"></i>Get Started
                    </a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/img-customer-service.png') }}" alt="Customer Service" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Contact Information -->
            <div class="col-lg-4">
                <span class="badge bg-warning text-white mb-3 px-3 py-2 rounded-0 skolo-badge">Get In Touch</span>
                <!-- Contact Cards -->
                <div class="card border-0 shadow-sm mb-4 feature-card">
                    <div class="card-body p-4">
                        <h3 class="h5 text-primary mb-3">
                            <i class="bi bi-geo-alt me-2"></i>
                            Office Location
                        </h3>
                        <p class="text-muted mb-0">
                            123 Business Street<br>
                            Tech Valley, CA 94043<br>
                            Eswatini
                        </p>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4 feature-card">
                    <div class="card-body p-4">
                        <h3 class="h5 text-primary mb-3">
                            <i class="bi bi-envelope me-2"></i>
                            Email Us
                        </h3>
                        <p class="text-muted mb-0">
                            admin@melanegroup.com<br>
                            support@melanegroup.com
                        </p>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4 feature-card">
                    <div class="card-body p-4">
                        <h3 class="h5 text-primary mb-3">
                            <i class="bi bi-telephone me-2"></i>
                            Call Us
                        </h3>
                        <p class="text-muted mb-0">
                            + (268) 76671033<br>
                            + (268) 35596530
                        </p>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="card border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <h3 class="h5 text-primary mb-3">
                            <i class="bi bi-clock me-2"></i>
                            Business Hours
                        </h3>
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-2">Monday - Friday: 8:00 AM - 5:00 PM</li>
                            <li>Saturday - Sunday: Closed</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h3 mb-4">Send Us a Message</h2>
                        <form action="#" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-warning text-white border-0 px-4 rounded-0">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0">
                            <!-- Replace with actual map embed code -->
                            <div class="ratio ratio-21x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.639290621062!2d-122.08374908469227!3d37.42199997982448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba02425dad8f%3A0x6c296c66619367e0!2sGoogleplex!5e0!3m2!1sen!2sus!4v1551836876400" width="100%" height="100%" style="border:0;" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
