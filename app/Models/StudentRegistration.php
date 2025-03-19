<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentRegistration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'email',
        'phone',
        'address',
        'grade',
        'subjects',
        'amount',
        'payment_method',
        'payment_status',
        'payment_id',
        'payment_details',
        'status',
        'current_step'
    ];

    protected $casts = [
        'subjects' => 'array',
        'payment_details' => 'array',
        'date_of_birth' => 'date',
        'amount' => 'decimal:2'
    ];

    protected $attributes = [
        'payment_status' => 'pending',
        'status' => 'incomplete',
        'current_step' => 1
    ];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function isPaymentCompleted()
    {
        return $this->payment_status === 'completed';
    }

    public function isRegistrationCompleted()
    {
        return $this->status === 'completed';
    }
}
