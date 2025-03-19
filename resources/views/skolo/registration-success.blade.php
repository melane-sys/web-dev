@extends('layouts.app')

@section('title', 'Registration Successful')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded-0 shadow-sm">
                <div class="card-header" style="background: linear-gradient(135deg, #1c4c7c 0%, #2a5a8a 100%);">
                    <h4 class="mb-0 text-white">Registration Successful</h4>
                </div>
                <div class="card-body text-center py-5">
                    <div class="mb-4">
                        <div class="success-icon mb-4">
                            <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                        </div>
                        <h2 class="h4 mb-3" style="color: #1c4c7c;">Thank You, {{ $registration->full_name }}!</h2>
                        <p class="lead text-muted">Your registration has been completed successfully.</p>
                    </div>

                    <div class="registration-details bg-light p-4 mb-4 rounded-0">
                        <h5 class="border-bottom pb-2 mb-3" style="color: #1c4c7c;">Registration Details</h5>
                        <div class="row g-3">
                            <div class="col-sm-6 text-start">
                                <p class="mb-1"><strong>Registration ID:</strong></p>
                                <p class="text-muted">{{ str_pad($registration->id, 6, '0', STR_PAD_LEFT) }}</p>
                            </div>
                            <div class="col-sm-6 text-start">
                                <p class="mb-1"><strong>Payment Status:</strong></p>
                                <span class="badge bg-success rounded-0">{{ ucfirst($registration->payment_status) }}</span>
                            </div>
                            <div class="col-sm-6 text-start">
                                <p class="mb-1"><strong>Payment Method:</strong></p>
                                <p class="text-muted">{{ $registration->payment_method === 'stripe' ? 'Credit Card' : 'MTN MoMo' }}</p>
                            </div>
                            <div class="col-sm-6 text-start">
                                <p class="mb-1"><strong>Amount Paid:</strong></p>
                                <p class="text-muted">R{{ number_format($registration->amount, 2) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="next-steps bg-light p-4 rounded-0">
                        <h5 class="border-bottom pb-2 mb-3" style="color: #1c4c7c;">Next Steps</h5>
                        <div class="text-start">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="fas fa-envelope me-2 text-warning"></i>
                                    Check your email for registration confirmation
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-book me-2 text-warning"></i>
                                    Review your selected subjects and course materials
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-calendar me-2 text-warning"></i>
                                    Mark your calendar for orientation day
                                </li>
                                <li>
                                    <i class="fas fa-phone me-2 text-warning"></i>
                                    Contact support if you have any questions
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ url('/') }}" class="btn btn-warning rounded-0 px-4">
                            <i class="fas fa-home me-2"></i>Return to Homepage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .success-icon {
        animation: scaleIn 0.5s ease-in-out;
    }
    @keyframes scaleIn {
        from {
            transform: scale(0);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }
    .registration-details, .next-steps {
        animation: slideUp 0.5s ease-in-out;
    }
    @keyframes slideUp {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
@endsection
