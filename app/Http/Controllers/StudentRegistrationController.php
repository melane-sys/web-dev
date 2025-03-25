<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentRegistrationController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'dateOfBirth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'nationality' => 'required|string|max:255',
            'idPassport' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'guardianName' => 'required|string|max:255',
            'relationship' => 'required|string|max:255',
            'guardianPhone' => 'required|string|max:20',
            'guardianEmail' => 'required|email',
            'gradeLevel' => 'required|string|max:255',
            'learningMode' => 'required|in:live,recorded,both',
            'username' => 'required|string|unique:students,username|max:255',
            'password' => 'required|string|min:8|confirmed',
            'paymentMethod' => 'required|in:mtn,bank,paypal,other',
            'termsAgreement' => 'required|accepted'
        ]);

        // Generate unique student ID (SKL + year + random 6 digits)
        $studentId = 'SKL' . date('Y') . str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);

        // Create new student record
        $student = Student::create([
            'student_id' => $studentId,
            'first_name' => $request->firstName,
            'middle_name' => $request->middleName,
            'last_name' => $request->lastName,
            'date_of_birth' => $request->dateOfBirth,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'id_passport' => $request->idPassport,
            'email' => $request->email,
            'phone' => $request->phone,
            'alt_phone' => $request->altPhone,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        // Create registration record
        $registration = StudentRegistration::create([
            'student_id' => $student->id,
            'guardian_name' => $request->guardianName,
            'guardian_relationship' => $request->relationship,
            'guardian_phone' => $request->guardianPhone,
            'guardian_email' => $request->guardianEmail,
            'current_school' => $request->currentSchool,
            'grade_level' => $request->gradeLevel,
            'preferred_subjects' => $request->subjects,
            'learning_mode' => $request->learningMode,
            'payment_method' => $request->paymentMethod,
            'billing_address' => $request->billingAddress,
            'referral_source' => $request->referralSource,
            'special_needs' => $request->specialNeeds,
            'communication_consent' => $request->has('communicationConsent'),
            'registration_status' => 'pending',
            'registration_date' => now(),
        ]);

        // Redirect with success message and student ID
        return redirect()->route('student.registration.success')
            ->with('success', 'Registration successful!')
            ->with('studentId', $studentId);
    }
}
