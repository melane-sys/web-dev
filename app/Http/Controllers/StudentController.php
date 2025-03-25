<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.student-registration');
    }

    public function register(Request $request)
    {
        $request->validate([
            // Personal Information
            'firstName' => 'required|string|max:255',
            'middleName' => 'nullable|string|max:255',
            'lastName' => 'required|string|max:255',
            'dateOfBirth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'nationality' => 'required|string|max:255',
            'idPassport' => 'required|string|max:255|unique:students,id_passport',

            // Contact Information
            'email' => 'required|email|max:255|unique:students,email',
            'phoneNumber' => 'required|string|max:20',
            'altPhone' => 'nullable|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',

            // Guardian Information
            'guardianName' => 'required|string|max:255',
            'guardianRelation' => 'required|string|max:255',
            'guardianPhone' => 'required|string|max:20',
            'guardianEmail' => 'required|email|max:255',

            // Academic Information
            'previousSchool' => 'required|string|max:255',
            'gradeLevel' => 'required|string|max:50',
            'academicYear' => 'required|string|max:20',
            'subjects' => 'nullable|string',

            // Account Information
            'password' => 'required|string|min:8|confirmed',
            'termsAgreement' => 'required|accepted',
            'communicationConsent' => 'nullable|boolean'
        ]);

        try {
            $student = new Student();
            
            // Generate student ID with timestamp only (format: 20250325042816 for March 25, 2025 04:28:16)
            $student->student_id = Carbon::now()->format('YmdHis');
            
            // Personal Information
            $student->first_name = $request->firstName;
            $student->middle_name = $request->middleName;
            $student->last_name = $request->lastName;
            $student->date_of_birth = $request->dateOfBirth;
            $student->gender = $request->gender;
            $student->nationality = $request->nationality;
            $student->id_passport = $request->idPassport;
            
            // Contact Information
            $student->email = $request->email;
            $student->phone_number = $request->phoneNumber;
            $student->alt_phone = $request->altPhone;
            $student->address = $request->address;
            $student->city = $request->city;
            $student->country = $request->country;
            
            // Guardian Information
            $student->guardian_name = $request->guardianName;
            $student->guardian_relation = $request->guardianRelation;
            $student->guardian_phone = $request->guardianPhone;
            $student->guardian_email = $request->guardianEmail;
            
            // Academic Information
            $student->previous_school = $request->previousSchool;
            $student->grade_level = $request->gradeLevel;
            $student->academic_year = $request->academicYear;
            $student->subjects = $request->subjects;
            
            // Account Information
            $student->password = bcrypt($request->password);
            $student->communication_consent = $request->has('communicationConsent');
            
            $student->save();

            return redirect()->route('registration.success')->with('studentId', $student->student_id);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Registration failed. Please try again.')->withInput();
        }
    }

    public function showRegistrationSuccess()
    {
        if (!session('studentId')) {
            return redirect()->route('student.register');
        }
        return view('auth.registration-success');
    }
}
