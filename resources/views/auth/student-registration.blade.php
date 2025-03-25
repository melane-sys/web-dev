@extends('layouts.app')

@section('title', 'Student Registration - Skolo Institute')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card rounded-0 shadow">
                    <div class="card-header py-4">
                        <h3 class="mb-0">Student Registration</h3>
                    </div>
                    <div class="card-body p-4">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="{{ route('student.register.submit') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <!-- Student ID Display -->
                            <div class="alert alert-info mb-4">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <div>
                                        <span>Your Student ID:</span>
                                        <strong id="studentId">Will be generated upon submission</strong>
                                    </div>
                                </div>
                            </div>

                            <!-- 1. Personal Information -->
                            <div class="card rounded-0 section-card mb-4">
                                <div class="card-header py-3">
                                    <h4>1. Personal Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label for="firstName" class="form-label">First Name*</label>
                                            <input type="text" class="form-control rounded-0" id="firstName" name="firstName" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="middleName" class="form-label">Middle Name</label>
                                            <input type="text" class="form-control rounded-0" id="middleName" name="middleName">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="lastName" class="form-label">Last Name*</label>
                                            <input type="text" class="form-control rounded-0" id="lastName" name="lastName" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="dateOfBirth" class="form-label">Date of Birth*</label>
                                            <input type="date" class="form-control rounded-0" id="dateOfBirth" name="dateOfBirth" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="gender" class="form-label">Gender*</label>
                                            <select class="form-select" id="gender" name="gender" required>
                                                <option value="">Choose...</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nationality" class="form-label">Nationality*</label>
                                            <input type="text" class="form-control" id="nationality" name="nationality" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="idPassport" class="form-label">ID/Passport Number*</label>
                                            <input type="text" class="form-control" id="idPassport" name="idPassport" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Contact Details -->
                            <div class="card rounded-0 section-card mb-4">
                                <div class="card-header py-3">
                                    <h4>2. Contact Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email Address*</label>
                                            <input type="email" class="form-control rounded-0" id="email" name="email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone Number*</label>
                                            <input type="tel" class="form-control rounded-0" id="phone" name="phoneNumber" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="altPhone" class="form-label">Alternative Phone Number</label>
                                            <input type="tel" class="form-control rounded-0" id="altPhone" name="altPhone">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="address" class="form-label">Residential Address*</label>
                                            <input type="text" class="form-control rounded-0" id="address" name="address" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="city" class="form-label">City/Town*</label>
                                            <input type="text" class="form-control rounded-0" id="city" name="city" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="country" class="form-label">Country*</label>
                                            <input type="text" class="form-control rounded-0" id="country" name="country" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Guardian Information -->
                            <div class="card rounded-0 section-card mb-4">
                                <div class="card-header py-3">
                                    <h4>3. Guardian/Parent Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="guardianName" class="form-label">Guardian Full Name*</label>
                                            <input type="text" class="form-control rounded-0" id="guardianName" name="guardianName" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="guardianRelation" class="form-label">Relationship to Student*</label>
                                            <input type="text" class="form-control rounded-0" id="guardianRelation" name="guardianRelation" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="guardianPhone" class="form-label">Guardian Contact Number*</label>
                                            <input type="tel" class="form-control rounded-0" id="guardianPhone" name="guardianPhone" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="guardianEmail" class="form-label">Guardian Email Address*</label>
                                            <input type="email" class="form-control rounded-0" id="guardianEmail" name="guardianEmail" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Academic Information -->
                            <div class="card rounded-0 section-card mb-4">
                                <div class="card-header py-3">
                                    <h4>4. Academic Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="currentSchool" class="form-label">Previous/Current School Name*</label>
                                            <input type="text" class="form-control rounded-0" id="currentSchool" name="previousSchool" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="gradeLevel" class="form-label">Grade/Level Applying For*</label>
                                            <select class="form-select rounded-0" id="gradeLevel" name="gradeLevel" required>
                                                <option value="">Choose...</option>
                                                <option value="Grade 1">Grade 1</option>
                                                <option value="Grade 2">Grade 2</option>
                                                <option value="Grade 3">Grade 3</option>
                                                <option value="Grade 4">Grade 4</option>
                                                <option value="Grade 5">Grade 5</option>
                                                <option value="Grade 6">Grade 6</option>
                                                <option value="Grade 7">Grade 7</option>
                                                <option value="Grade 8">Grade 8</option>
                                                <option value="Grade 9">Grade 9</option>
                                                <option value="Grade 10">Grade 10</option>
                                                <option value="Grade 11">Grade 11</option>
                                                <option value="Grade 12">Grade 12</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="academicYear" class="form-label">Academic Year*</label>
                                            <select class="form-select" id="academicYear" name="academicYear" required>
                                                <option value="">Choose...</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="subjects" class="form-label">Preferred Subjects*</label>
                                            <textarea class="form-control" id="subjects" name="subjects" rows="3" required></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="learningMode" class="form-label">Learning Mode*</label>
                                            <select class="form-select" id="learningMode" name="learningMode" required>
                                                <option value="">Choose...</option>
                                                <option value="live">Live Classes</option>
                                                <option value="recorded">Recorded Classes</option>
                                                <option value="both">Both</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 5. Account & Login Information -->
                            <div class="card rounded-0 section-card mb-4">
                                <div class="card-header py-3">
                                    <h4>5. Account & Login Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="password" class="form-label">Password*</label>
                                            <input type="password" class="form-control" id="password" name="password" required minlength="8">
                                            <small class="text-muted">Minimum 8 characters</small>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password_confirmation" class="form-label">Confirm Password*</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required minlength="8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 7. Additional Information -->
                            <div class="card rounded-0 section-card mb-4">
                                <div class="card-header py-3">
                                    <h4>7. Additional Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="referralSource" class="form-label">How did you hear about us?*</label>
                                            <select class="form-select" id="referralSource" name="referralSource" required>
                                                <option value="">Choose...</option>
                                                <option value="social">Social Media</option>
                                                <option value="referral">Referral</option>
                                                <option value="website">Website</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="specialNeeds" class="form-label">Special Learning Needs</label>
                                            <textarea class="form-control" id="specialNeeds" name="specialNeeds" rows="3"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="termsAgreement" name="termsAgreement" required>
                                                <label class="form-check-label" for="termsAgreement">
                                                    I agree to the Terms & Conditions*
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="communicationConsent" name="communicationConsent">
                                                <label class="form-check-label" for="communicationConsent">
                                                    I consent to receive updates via SMS, Email, or WhatsApp
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn rounded-0 btn-primary btn-lg">Submit Registration</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    :root {
        --skolo-primary: #1c4c7c;
        --skolo-secondary: #2a5a8a;
        --skolo-light: rgba(28, 76, 124, 0.1);
    }

    body {
        background: linear-gradient(135deg, var(--skolo-primary) 0%, var(--skolo-secondary) 100%);
    }

    .card {
        border-radius: 0;
        border: none;
    }

    .card-header {
        background: var(--skolo-primary);
        color: white;
        border-radius: 0;
    }

    .section-card .card-header {
        background: var(--skolo-light);
    }

    .section-card .card-header h4 {
        color: var(--skolo-primary);
        margin: 0;
    }

    .form-control, .form-select {
        border-radius: 0;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--skolo-primary);
        box-shadow: 0 0 0 0.25rem var(--skolo-light);
    }

    .form-check-input:checked {
        background-color: var(--skolo-primary);
        border-color: var(--skolo-primary);
    }

    .btn-primary {
        background-color: var(--skolo-primary);
        border-color: var(--skolo-primary);
        border-radius: 0;
    }

    .btn-primary:hover {
        background-color: var(--skolo-secondary);
        border-color: var(--skolo-secondary);
    }

    .alert-info {
        background: var(--skolo-light);
        border-color: var(--skolo-primary);
        color: var(--skolo-primary);
        border-radius: 0;
    }

    .section-title {
        color: var(--skolo-primary);
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form.needs-validation');
    
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
});
</script>
@endpush

@endsection
