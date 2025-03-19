<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'national_id',
        'profile_picture',
        'email',
        'phone_number',
        'address',
        'guardian_name',
        'guardian_phone',
        'guardian_email',
        'school_name',
        'grade_level',
        'subjects',
        'preferred_mode',
        'password',
        'student_number',
        'notes',
        'status'
    ];

    protected $casts = [
        'subjects' => 'array',
        'date_of_birth' => 'date',
        'registration_date' => 'datetime',
    ];
}
