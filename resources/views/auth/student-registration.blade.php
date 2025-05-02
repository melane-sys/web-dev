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
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('error'))
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
                            <form action="{{ route('student.register.submit') }}" method="POST" class="needs-validation"
                                novalidate>
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
                                                <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control rounded-0" id="firstName"
                                                    name="firstName" required>
                                                <div class="valid-tooltip"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="middleName" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control rounded-0" id="middleName"
                                                    name="middleName">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="lastName" class="form-label">Last Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control rounded-0" id="lastName"
                                                    name="lastName" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="dateOfBirth" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control rounded-0" id="dateOfBirth"
                                                    name="dateOfBirth" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                                                <select class="form-select" id="gender" name="gender" required>
                                                    <option value="">Choose...</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nationality" class="form-label">Nationality <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="nationality" name="nationality"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="idPassport" class="form-label">ID/Passport Number<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="idPassport" name="idPassport"
                                                    required>
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
                                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control rounded-0" id="email" name="email"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                                <input type="tel" class="form-control rounded-0" id="phone"
                                                    name="phoneNumber" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="altPhone" class="form-label">Alternative Phone Number</label>
                                                <input type="tel" class="form-control rounded-0" id="altPhone"
                                                    name="altPhone">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address" class="form-label">Residential Address <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control rounded-0" id="address"
                                                    name="address" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="city" class="form-label">City/Town <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control rounded-0" id="city" name="city"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="country" class="form-label">Country<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control rounded-0" id="country"
                                                    name="country" required>
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
                                                <label for="guardianName" class="form-label">Guardian Full Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control rounded-0" id="guardianName"
                                                    name="guardianName" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="guardianRelation" class="form-label">Relationship to
                                                    Student <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control rounded-0" id="guardianRelation"
                                                    name="guardianRelation" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="guardianPhone" class="form-label">Guardian Contact
                                                    Number<span class="text-danger">*</span></label>
                                                <input type="tel" class="form-control rounded-0" id="guardianPhone"
                                                    name="guardianPhone" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="guardianEmail" class="form-label">Guardian Email
                                                    Address <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control rounded-0" id="guardianEmail"
                                                    name="guardianEmail" required>
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
                                                <label for="currentSchool" class="form-label">Previous/Current School
                                                    Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control rounded-0" id="currentSchool"
                                                    name="previousSchool" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="gradeLevel" class="form-label">Grade/Level Applying
                                                    For <span class="text-danger">*</span></label>
                                                <select class="form-select rounded-0" id="gradeLevel" name="gradeLevel"
                                                    required>
                                                    <option value="">Choose...</option>
                                                    <option value="Grade 1" data-target="info1">Grade 1</option>
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
                                                <label for="learningMode" class="form-label">Learning Mode*</label>
                                                <select class="form-select" id="learningMode" name="learningMode" required>
                                                    <option value="">Choose...</option>
                                                    <option value="live">Live Classes</option>
                                                    <option value="recorded">Recorded Classes</option>
                                                    <option value="both">Both</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <style>
                                                    .hidden {
                                                        display: none;
                                                    }
                                                    .info-container {
                                                        margin: 10px 0;
                                                        padding: 15px;
                                                        border: 1px solid #ddd;
                                                        border-radius: 4px;
                                                        background-color: #f9f9f9;
                                                    }
                                                      .subject-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .subject-card.selected {
            border-color: #4f46e5;
            background-color: #f5f3ff;
        }
        .checkout-summary {
            transition: all 0.3s ease;
        }
        .quantity-btn {
            transition: all 0.2s ease;
        }
        .quantity-btn:hover {
            background-color: #e0e7ff;
        }
        #checkout-section {
            display: none;
        }

                                                </style>
                                                <!--  <label for="subjects" class="form-label">Preferred Subjects*</label>
                                                        <textarea class="form-control" id="subjects" name="subjects" rows="3" required></textarea> -->
                                                <div class="container">
                                                     <h4 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                                                        <i class="fas fa-book-open mr-3 text-indigo-500"></i> Available Subjects <span class="text-danger">*</span></h4>
                                                    <ul class="ks-cboxtags">
                                                        <!-- Container Group 1 -->
                                                        <div class="checkbox-group">
                                                            <label>
                                                                <!-- Checkbox attributes:
                        - class: For JavaScript selection
                        - data-target: Associates checkbox with container (matches ID)
                        -->
                                                                <input type="checkbox" class="toggle-checkbox"
                                                                    data-target="info1"> Primary Level Grade 1 - Grade 7 Subjects</label>
                                                            <!--
                    Information Container 1
                    - id matches checkbox's data-target
                    - starts hidden by default
                    -->
                                                            <div id="info1" class="info-container hidden">
                                                                <div class="container">
                                                                    <ul class="ks-cboxtags">
                                                                        <li><input type="checkbox" id="checkboxOne" value="Rainbow Dash" onclick="toggleSubject(this, 'Mathematics')" ><label for="checkboxOne">English Language</label>
                                                                                <div class="quantity-control hidden">
                                                                                    <button class="quantity-btn w-6 h-6 rounded-full border border-gray-300 flex items-center justify-center" onclick="event.stopPropagation(); adjustQuantity('Mathematics', -1)">-</button>
                                                                                    <span class="mx-2 quantity" id="Mathematics-qty">0</span>
                                                                                    <button class="quantity-btn w-6 h-6 rounded-full border border-gray-300 flex items-center justify-center" onclick="event.stopPropagation(); adjustQuantity('Mathematics', 1)">+</button>
                                                                                </div>
                                                                        </li>
                                                                        <li><input type="checkbox" id="checkboxTwo"
                                                                                value="Cotton Candy"><label
                                                                                for="checkboxTwo">Mathematics</label></li>
                                                                        <li><input type="checkbox" id="checkboxThree"
                                                                                value="Rarity"><label
                                                                                for="checkboxThree">Religious
                                                                                Education</label></li>
                                                                        <li><input type="checkbox" id="checkboxFour"
                                                                                value="Moondancer"><label
                                                                                for="checkboxFour">Science</label></li>
                                                                        <li><input type="checkbox" id="checkboxFive"
                                                                                value="Surprise"><label
                                                                                for="checkboxFive">SiSwati</label></li>
                                                                        <li><input type="checkbox" id="checkboxSix"
                                                                                value="Twilight Sparkle"><label
                                                                                for="checkboxSix">Social Studies</label>
                                                                        </li>
                                                                        <li><input type="checkbox" id="checkboxSeven"
                                                                                value="Fluttershy"><label
                                                                                for="checkboxSeven">Agriculture</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Container Group 2 -->
                                                        <div class="checkbox-group">
                                                            <label>
                                                                <input type="checkbox" class="toggle-checkbox"
                                                                    data-target="info2"> Junior Secondary Form 1 - Form 3 Subjects</label>
                                                            <div id="info2" class="info-container hidden">
                                                                <div class="container">
                                                                    <ul class="ks-cboxtags">
                                                                        <li><input type="checkbox" id="bk"
                                                                                value="Bookkeeping and Accounts"><label
                                                                                for="bk">Bookkeeping and
                                                                                Accounts</label></li>
                                                                        <li><input type="checkbox" id="agrjc"
                                                                                value="Agriculture"><label
                                                                                for="agrjc">Agriculture</label></li>
                                                                        <li><input type="checkbox" id="bsjc"
                                                                                value="Business Studies"><label
                                                                                for="bsjc">Business Studies</label>
                                                                        </li>
                                                                        <li><input type="checkbox" id="scijc"
                                                                                value="Science"><label
                                                                                for="scijc">Science</label></li>
                                                                        <li><input type="checkbox" id="sisjc"
                                                                                value="SiSwati"><label
                                                                                for="sisjc">SiSwati</label></li>
                                                                        <li><input type="checkbox" id="sosjc"
                                                                                value="Social Studies"><label
                                                                                for="sosjc">Social Studies</label></li>
                                                                        <li><input type="checkbox" id="engjc"
                                                                                value="English Language"><label
                                                                                for="engjc">English Language</label>
                                                                        </li>
                                                                        <li><input type="checkbox" id="geojc"
                                                                                value="Geography"><label
                                                                                for="geojc">Geography</label></li>
                                                                        <li><input type="checkbox" id="hisjc"
                                                                                value="History"><label
                                                                                for="hisjc">History</label></li>
                                                                        <li><input type="checkbox" id="matjc"
                                                                                value="Mathematics"><label
                                                                                for="matjc">Mathematics</label></li>
                                                                        <li class="ks-selected"><input type="checkbox"
                                                                                id="addjc"
                                                                                value="Additional Mathematics"><label
                                                                                for="addjc">Additional
                                                                                Mathematics</label></li>
                                                                        <li><input type="checkbox" id="litjc"
                                                                                value="Baby Literature in English"><label
                                                                                for="litjc">Literature in English
                                                                            </label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Container Group 3 -->
                                                        <div class="checkbox-group">
                                                            <label>
                                                                <input type="checkbox" class="toggle-checkbox"
                                                                    data-target="info3"> High School Form 4 - Form 5 Subjects</label>
                                                            <div id="info3" class="info-container hidden">
                                                                <h3></h3>
                                                                <div class="container">
                                                                    <ul class="ks-cboxtags">

                                                                        <li><input type="checkbox" id="acc"
                                                                                value="Accounting"><label
                                                                                for="acc">Accounting</label></li>
                                                                        <li><input type="checkbox" id="bio"
                                                                                value="Biology"><label
                                                                                for="bio">Biology</label></li>
                                                                        <li><input type="checkbox" id="bssn"
                                                                                value="Business Studies"><label
                                                                                for="bsjc">Business Studies</label>
                                                                        </li>
                                                                        <li><input type="checkbox" id="physn"
                                                                                value="Physical Science"><label
                                                                                for="physn">Physical Science</label>
                                                                        </li>
                                                                        <li><input type="checkbox" id="sissn"
                                                                                value="SiSwati"><label
                                                                                for="sissn">SiSwati</label></li>
                                                                        <li><input type="checkbox" id="ecosn"
                                                                                value="Economics"><label
                                                                                for="ecosn">Economics</label></li>
                                                                        <li><input type="checkbox" id="engsn"
                                                                                value="English Language"><label
                                                                                for="engsn">English Language</label>
                                                                        </li>
                                                                        <li><input type="checkbox" id="geosn"
                                                                                value="Geography"><label
                                                                                for="geosn">Geography</label></li>
                                                                        <li><input type="checkbox" id="hissn"
                                                                                value="History"><label
                                                                                for="hissn">History</label></li>
                                                                        <li><input type="checkbox" id="matsn"
                                                                                value="Mathematics"><label
                                                                                for="matjc">Mathematics</label></li>
                                                                        <li class="ks-selected"><input type="checkbox"
                                                                                id="addsn"
                                                                                value="Additional Mathematics"><label
                                                                                for="addsn">Additional
                                                                                Mathematics</label></li>
                                                                        <li><input type="checkbox" id="litsn"
                                                                                value="Baby Literature in English"><label
                                                                                for="litsn">Literature in English
                                                                            </label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </ul>

                                                </div>
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
                                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" id="password" name="password"
                                                    required minlength="8">
                                                <small class="text-muted">Minimum 8 characters</small>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="password_confirmation" class="form-label">Confirm
                                                    Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" required minlength="8">
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
                                                <label for="referralSource" class="form-label">How did you hear about
                                                    us? <span class="text-danger">*</span></label>
                                                <select class="form-select" id="referralSource" name="referralSource"
                                                    required>
                                                    <option value="">Choose...</option>
                                                    <option value="social">Social Media</option>
                                                    <option value="referral">Referral</option>
                                                    <option value="website">Website</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="specialNeeds" class="form-label">Special Learning
                                                    Needs</label>
                                                <textarea class="form-control" id="specialNeeds" name="specialNeeds"
                                                    rows="3"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="termsAgreement"
                                                        name="termsAgreement" required>
                                                    <label class="form-check-label" for="termsAgreement">
                                                        I agree to the Terms & Conditions*
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="communicationConsent" name="communicationConsent">
                                                    <label class="form-check-label" for="communicationConsent">
                                                        I consent to receive updates via SMS, Email, or WhatsApp
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn rounded-0 btn-primary btn-lg">Submit
                                        Registration</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript Execution Context
        (function () {
            /**
             * Add event listeners to all checkboxes with class 'toggle-checkbox'
             * This will work for existing and future elements with this class
             */
            document.querySelectorAll('.toggle-checkbox').forEach(checkbox => {
                // Event listener for checkbox state changes
                checkbox.addEventListener('change', function () {
                    // Get target container ID from data attribute
                    const targetId = this.dataset.target;

                    // Find the corresponding info container
                    const infoContainer = document.getElementById(targetId);

                    // Safety check if container exists
                    if (infoContainer) {
                        /**
                         * Toggle visibility:
                         * - Add 'hidden' class when unchecked
                         * - Remove 'hidden' class when checked
                         * The second parameter converts checked state to boolean
                         */
                        infoContainer.classList.toggle('hidden', !this.checked);
                    }
                });
            });
        })();
    </script>

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

            .form-control,
            .form-select {
                border-radius: 0;
            }

            .form-control:focus,
            .form-select:focus {
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
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.querySelector('form.needs-validation');

                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                });
            });
        </script>


    <script>
        // Store selected subjects and their quantities
        const selectedSubjects = {};
        const subjectPrice = 150;
        const registrationFee = 50;

        // Toggle subject selection
        function toggleSubject(element, subjectName) {
            const card = element;
            const quantityControl = card.querySelector('.quantity-control');

            if (card.classList.contains('selected')) {
                // Deselect subject
                card.classList.remove('selected');
                quantityControl.classList.add('hidden');
                delete selectedSubjects[subjectName];
            } else {
                // Select subject
                card.classList.add('selected');
                quantityControl.classList.remove('hidden');
                if (!selectedSubjects[subjectName]) {
                    selectedSubjects[subjectName] = 1;
                    document.getElementById(`${subjectName}-qty`).textContent = '1';
                }
            }

            updateCheckoutSummary();
        }

        // Adjust quantity for a subject
        function adjustQuantity(subjectName, change) {
            const currentQty = selectedSubjects[subjectName] || 0;
            const newQty = currentQty + change;

            if (newQty > 0) {
                selectedSubjects[subjectName] = newQty;
                document.getElementById(`${subjectName}-qty`).textContent = newQty;
            } else if (newQty === 0) {
                delete selectedSubjects[subjectName];
                document.querySelector(`.subject-card[onclick*="${subjectName}"]`).classList.remove('selected');
                document.querySelector(`.subject-card[onclick*="${subjectName}"] .quantity-control`).classList.add('hidden');
            }

            updateCheckoutSummary();
        }

        // Update the checkout summary
        function updateCheckoutSummary() {
            const selectedSubjectsContainer = document.getElementById('selected-subjects');
            let subtotal = 0;

            if (Object.keys(selectedSubjects).length === 0) {
                selectedSubjectsContainer.innerHTML = '<p class="text-gray-500 italic">No subjects selected yet</p>';
            } else {
                let html = '';
                for (const [subject, qty] of Object.entries(selectedSubjects)) {
                    const subjectTotal = qty * subjectPrice;
                    subtotal += subjectTotal;

                    html += `
                        <div class="flex justify-between items-center py-2">
                            <div>
                                <span class="font-medium">${subject}</span>
                                <span class="text-gray-500 text-sm ml-2">x${qty}</span>
                            </div>
                            <span class="font-medium">E${subjectTotal}</span>
                        </div>
                    `;
                }
                selectedSubjectsContainer.innerHTML = html;
            }

            document.getElementById('subtotal').textContent = `E${subtotal}`;
            const total = subtotal + registrationFee;
            document.getElementById('total').textContent = `E${total}`;
        }

        // Validate registration and show checkout
        function validateAndShowCheckout() {
            // Validate student information
            const name = document.getElementById('name').value.trim();
            const studentId = document.getElementById('student-id').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();

            if (!name) {
                alert('Please enter your full name.');
                document.getElementById('name').focus();
                return;
            }

            if (!studentId) {
                alert('Please enter your student ID.');
                document.getElementById('student-id').focus();
                return;
            }

            if (!email) {
                alert('Please enter your email address.');
                document.getElementById('email').focus();
                return;
            } else if (!/^\S+@\S+\.\S+$/.test(email)) {
                alert('Please enter a valid email address.');
                document.getElementById('email').focus();
                return;
            }

            if (!phone) {
                alert('Please enter your phone number.');
                document.getElementById('phone').focus();
                return;
            }

            if (Object.keys(selectedSubjects).length === 0) {
                alert('Please select at least one subject.');
                return;
            }

            // Show checkout section
            document.getElementById('checkout-section').style.display = 'block';

            // Scroll to checkout section
            document.getElementById('checkout-section').scrollIntoView({ behavior: 'smooth' });
        }

        // Process checkout
        function processCheckout() {
            // Show payment modal
            document.getElementById('modal-total').textContent = document.getElementById('total').textContent;
            document.getElementById('payment-modal').classList.remove('hidden');
        }

        // Complete payment
        function completePayment() {
            // Validate payment info (simplified for demo)
            const cardNumber = document.getElementById('card-number').value.trim();
            const expiry = document.getElementById('expiry').value.trim();
            const cvv = document.getElementById('cvv').value.trim();

            if (!cardNumber || cardNumber.length < 16) {
                alert('Please enter a valid card number (16 digits).');
                document.getElementById('card-number').focus();
                return;
            }

            if (!expiry || !/^\d{2}\/\d{2}$/.test(expiry)) {
                alert('Please enter a valid expiry date (MM/YY format).');
                document.getElementById('expiry').focus();
                return;
            }

            if (!cvv || cvv.length < 3) {
                alert('Please enter a valid CVV (3 digits).');
                document.getElementById('cvv').focus();
                return;
            }

            // Simulate payment processing
            setTimeout(() => {
                document.getElementById('payment-modal').classList.add('hidden');

                // Show success message
                alert('Payment successful! Your subjects have been registered.');

                // Reset form (for demo purposes)
                resetForm();
            }, 1500);
        }

        // Reset the entire form
        function resetForm() {
            // Reset subject selection
            document.querySelectorAll('.subject-card').forEach(card => {
                card.classList.remove('selected');
                card.querySelector('.quantity-control').classList.add('hidden');
            });
            document.querySelectorAll('.quantity').forEach(el => el.textContent = '0');

            // Clear selected subjects
            for (const subject in selectedSubjects) {
                delete selectedSubjects[subject];
            }

            // Reset student info
            document.getElementById('name').value = '';
            document.getElementById('student-id').value = '';
            document.getElementById('email').value = '';
            document.getElementById('phone').value = '';

            // Reset payment info
            document.getElementById('card-number').value = '';
            document.getElementById('expiry').value = '';
            document.getElementById('cvv').value = '';

            // Hide checkout section
            document.getElementById('checkout-section').style.display = 'none';

            // Update checkout summary
            updateCheckoutSummary();
        }
    </script>
    @endpush

@endsection