@extends('layouts.app')

@section('title', 'Career Opportunities')

@section('content')
    <!-- Hero Section -->
    <div class="text-white py-5" style="background: linear-gradient(135deg, #1c4c7c 0%, #2a5a8a 100%);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Join Our Team</h1>
                    <p class="lead mb-4 opacity-90">Be part of an innovative team that's shaping the future of technology. We're always looking for talented individuals who share our passion for excellence.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/img-careers.png') }}" alt="Careers at Melane Systems" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Current Openings -->
    <div class="py-5">
        <div class="container">
            <span class="badge bg-warning text-white mb-3 px-3 py-2 rounded-0">Current Openings</span>
            <div class="row g-4">
                <!-- Software Developer -->
                <div class="col-lg-6">
                    <div class="card h-100 rounded-0 hover-card">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <div>
                                    <h3 class="h4 fw-bold mb-2">Software Developer</h3>
                                    <span class="badge bg-primary rounded-0">Full Time</span>
                                </div>
                                <span class="text-warning"><i class="fas fa-code fa-2x"></i></span>
                            </div>
                            <p class="text-muted mb-4">We're looking for a passionate Software Developer to join our dynamic team. The ideal candidate will have strong problem-solving skills and experience in web development.</p>
                            <div class="d-flex flex-wrap gap-2 mb-4">
                                <span class="badge bg-light text-dark rounded-0">PHP</span>
                                <span class="badge bg-light text-dark rounded-0">Laravel</span>
                                <span class="badge bg-light text-dark rounded-0">JavaScript</span>
                                <span class="badge bg-light text-dark rounded-0">Vue.js</span>
                            </div>
                            <a href="{{ url('/contact') }}" class="btn btn-outline-primary rounded-0">Apply Now</a>
                        </div>
                    </div>
                </div>

                <!-- UI/UX Designer -->
                <div class="col-lg-6">
                    <div class="card h-100 rounded-0 hover-card">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <div>
                                    <h3 class="h4 fw-bold mb-2">UI/UX Designer</h3>
                                    <span class="badge bg-primary rounded-0">Full Time</span>
                                </div>
                                <span class="text-warning"><i class="fas fa-palette fa-2x"></i></span>
                            </div>
                            <p class="text-muted mb-4">We're seeking a creative UI/UX Designer to craft beautiful and intuitive user experiences. The ideal candidate will have a strong portfolio and passion for user-centered design.</p>
                            <div class="d-flex flex-wrap gap-2 mb-4">
                                <span class="badge bg-light text-dark rounded-0">Figma</span>
                                <span class="badge bg-light text-dark rounded-0">Adobe XD</span>
                                <span class="badge bg-light text-dark rounded-0">HTML/CSS</span>
                                <span class="badge bg-light text-dark rounded-0">Prototyping</span>
                            </div>
                            <a href="{{ url('/contact') }}" class="btn btn-outline-primary rounded-0">Apply Now</a>
                        </div>
                    </div>
                </div>

                <!-- Project Manager -->
                <div class="col-lg-6">
                    <div class="card h-100 rounded-0 hover-card">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <div>
                                    <h3 class="h4 fw-bold mb-2">Project Manager</h3>
                                    <span class="badge bg-primary rounded-0">Full Time</span>
                                </div>
                                <span class="text-warning"><i class="fas fa-tasks fa-2x"></i></span>
                            </div>
                            <p class="text-muted mb-4">We're looking for an experienced Project Manager to lead our development teams. The ideal candidate will have strong leadership skills and technical background.</p>
                            <div class="d-flex flex-wrap gap-2 mb-4">
                                <span class="badge bg-light text-dark rounded-0">Agile</span>
                                <span class="badge bg-light text-dark rounded-0">Scrum</span>
                                <span class="badge bg-light text-dark rounded-0">JIRA</span>
                                <span class="badge bg-light text-dark rounded-0">Team Leadership</span>
                            </div>
                            <a href="{{ url('/contact') }}" class="btn btn-outline-primary rounded-0">Apply Now</a>
                        </div>
                    </div>
                </div>

                <!-- DevOps Engineer -->
                <div class="col-lg-6">
                    <div class="card h-100 rounded-0 hover-card">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <div>
                                    <h3 class="h4 fw-bold mb-2">DevOps Engineer</h3>
                                    <span class="badge bg-primary rounded-0">Full Time</span>
                                </div>
                                <span class="text-warning"><i class="fas fa-server fa-2x"></i></span>
                            </div>
                            <p class="text-muted mb-4">We're seeking a skilled DevOps Engineer to streamline our development and deployment processes. The ideal candidate will have experience with cloud platforms and automation.</p>
                            <div class="d-flex flex-wrap gap-2 mb-4">
                                <span class="badge bg-light text-dark rounded-0">AWS</span>
                                <span class="badge bg-light text-dark rounded-0">Docker</span>
                                <span class="badge bg-light text-dark rounded-0">CI/CD</span>
                                <span class="badge bg-light text-dark rounded-0">Kubernetes</span>
                            </div>
                            <a href="{{ url('/contact') }}" class="btn btn-outline-primary rounded-0">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Join Us -->
    <div class="py-5 bg-light">
        <div class="container">
            <span class="badge bg-warning text-white mb-3 px-3 py-2 rounded-0">Why Join Us</span>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <div class="text-warning mb-3">
                                <i class="fas fa-chart-line fa-3x"></i>
                            </div>
                            <h3 class="h5 fw-bold">Career Growth</h3>
                            <p class="text-muted mb-0">Opportunities for continuous learning and professional development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <div class="text-warning mb-3">
                                <i class="fas fa-users fa-3x"></i>
                            </div>
                            <h3 class="h5 fw-bold">Great Culture</h3>
                            <p class="text-muted mb-0">Collaborative environment with talented and passionate individuals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <div class="text-warning mb-3">
                                <i class="fas fa-laptop fa-3x"></i>
                            </div>
                            <h3 class="h5 fw-bold">Remote Work</h3>
                            <p class="text-muted mb-0">Flexible work arrangements to maintain work-life balance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <div class="text-warning mb-3">
                                <i class="fas fa-gift fa-3x"></i>
                            </div>
                            <h3 class="h5 fw-bold">Great Benefits</h3>
                            <p class="text-muted mb-0">Competitive salary and comprehensive benefits package.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="h3 mb-4">Ready to Join Our Team?</h2>
                    <p class="lead text-muted mb-4">We're always looking for talented individuals who share our passion for innovation and excellence.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-warning rounded-0 text-white px-4">
                        <i class="fas fa-paper-plane me-2"></i>Apply Now
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
