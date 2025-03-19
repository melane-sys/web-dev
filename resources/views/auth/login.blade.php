@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="text-white py-5" style="background-color: #1c4c7c">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <i class="fas fa-user-circle display-1 mb-4"></i>
                    <h1 class="display-4 fw-bold mb-3">Welcome Back</h1>
                    <p class="lead mb-0">Sign in to your Melane Systems account</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <form>
                            <div class="mb-4">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope me-2"></i>Email Address
                                </label>
                                <input type="email" class="form-control form-control-lg rounded-0" id="email" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">
                                    <i class="fas fa-lock me-2"></i>Password
                                </label>
                                <input type="password" class="form-control form-control-lg rounded-0" id="password" required>
                            </div>
                            <div class="mb-4 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">
                                        <i class="fas fa-check-circle me-1"></i>Remember me
                                    </label>
                                </div>
                                <a href="#" class="text-decoration-none" style="color: #1c4c7c">
                                    <i class="fas fa-key me-1"></i>Forgot password?
                                </a>
                            </div>
                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn-warning text-white border-0 px-4 rounded-0 btn-lg">
                                    <i class="fas fa-sign-in-alt me-2"></i>Sign In
                                </button>
                            </div>
                            <div class="text-center">
                                <p class="mb-0">Don't have an account? <a href="{{ url('/signup') }}" class="text-decoration-none" style="color: #1c4c7c">
                                    <i class="fas fa-user-plus me-1"></i>Sign Up
                                </a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
