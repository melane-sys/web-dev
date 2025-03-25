<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_id',
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'gender',
        'nationality',
        'id_passport',
        'email',
        'phone',
        'alt_phone',
        'address',
        'city',
        'country',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function registration()
    {
        return $this->hasOne(StudentRegistration::class, 'student_id');
    }
}
