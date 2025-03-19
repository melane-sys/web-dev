@extends('layouts.app')

@section('title', 'Small Business Solutions')

@section('content')
    <!-- Hero Section -->
    <div class="text-white py-5" style="background-color: #1c4c7c">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Small Business Solutions</h1>
                    <p class="lead mb-4">Empowering Small Businesses with Smart Solutions. We provide tailored digital solutions to help small businesses streamline operations, enhance customer relationships, and drive growth.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-warning rounded-0 text-white px-4">
                        <i class="fas fa-rocket me-2"></i>Get Started
                    </a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/img-business-solutions.png') }}" alt="Business Solutions" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Solutions Section -->
    <div class="py-5">
        <div class="container">
            <span class="badge bg-warning text-white mb-3 px-3 py-2 rounded-0 skolo-badge">Our Solutions</span>
            <div class="row g-4">
                <!-- CRM -->
                <div class="col-lg-6">
                    <div class="card h-100 rounded-0 feature-card">
                        <div class="card-body p-4">
                            <div class="display-6 text-warning mb-4">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="h4 mb-3">CRM Solutions</h3>
                            <p class="text-muted mb-4">Customer Relationship Management systems to help you manage interactions, automate sales processes, and improve customer retention.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Contact Management</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Sales Automation</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Customer Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Analytics & Reporting</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ERP -->
                <div class="col-lg-6">
                    <div class="card h-100 rounded-0 feature-card">
                        <div class="card-body p-4">
                            <div class="display-6 text-warning mb-4">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <h3 class="h4 mb-3">ERP Systems</h3>
                            <p class="text-muted mb-4">Enterprise Resource Planning solutions to optimize business processes, track finances, and improve operational efficiency.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Financial Management</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Inventory Control</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>HR Management</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Business Intelligence</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Custom Solutions -->
                <div class="col-lg-6">
                    <div class="card h-100 rounded-0 feature-card">
                        <div class="card-body p-4">
                            <div class="display-6 text-warning mb-4">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h3 class="h4 mb-3">Customized Solutions</h3>
                            <p class="text-muted mb-4">Tailored digital tools designed specifically to meet your unique business requirements and challenges.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Workflow Automation</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Integration Services</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Custom Dashboards</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Business Process Design</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Software Development -->
                <div class="col-lg-6">
                    <div class="card h-100 rounded-0 feature-card">
                        <div class="card-body p-4">
                            <div class="display-6 text-warning mb-4">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3 class="h4 mb-3">Software Development</h3>
                            <p class="text-muted mb-4">Build scalable software solutions that grow with your business and maintain competitive advantage.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Web Applications</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mobile Apps</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>API Development</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Cloud Solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="h3 mb-4">Ready to Transform Your Business?</h2>
                    <p class="lead text-muted mb-4">Let's discuss how our solutions can help your business grow.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-warning rounded-0 text-white px-4">
                        <i class="fas fa-paper-plane me-2"></i>Contact Us Today
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
