<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentRegistration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'guardian_name',
        'guardian_relationship',
        'guardian_phone',
        'guardian_email',
        'current_school',
        'grade_level',
        'preferred_subjects',
        'learning_mode',
        'payment_method',
        'billing_address',
        'referral_source',
        'special_needs',
        'communication_consent',
        'registration_status',
        'registration_date'
    ];

    protected $casts = [
        'registration_date' => 'datetime',
       // 'communication_consent' => 'boolean',
    ];

    protected $attributes = [
        'registration_status' => 'pending'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
