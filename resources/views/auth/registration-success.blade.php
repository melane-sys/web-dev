@extends('layouts.app')

@section('title', 'Registration Success - Skolo Institute')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h2 class="mb-4">Registration Successful!</h2>
                    <div class="alert alert-info mb-4">
                        <h4 class="alert-heading">Your Student ID</h4>
                        <p class="display-6 mb-0">{{ session('studentId') }}</p>
                        <small class="text-muted">Please save this ID for future reference</small>
                    </div>
                    <p class="mb-4">Thank you for registering with Skolo Institute. 📌 Important: Use your Student ID as the reference when making payments via MTN MoMo to ensure quick enrollment confirmation.</p>
                    <div class="d-grid gap-3 col-md-6 mx-auto">
                        <a href="{{ url('/skolo') }}" class="btn btn-primary rounded-0">Return to Skolo Page</a>
                        <a href="{{ route('student.register') }}" class="btn btn-outline-primary rounded-0">New Registration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
